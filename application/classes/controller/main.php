<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	private $errors = array();

	private function create_image_thumb($filename, $id, $ext, $width = 150, $height = 200) {
		$image = Image::factory($filename);
		if ( $image->width / $image->height == $width / $height ) {
			$image->resize($width, $height);
		} else {
			if ( $image->width / $image->height < $width / $height ) {
				$image->resize($width, NULL);
			} else {
				$image->resize(NULL, $height);
			}
			$image->crop($width, $height);
		}
		$image->save('./images/'.$id.'/thumb.'.$ext);
	}
	
	private function upload_image() {
		$validate = Validation::factory($_FILES);
		$validate->rules('image', array(
			array(
				'Upload::not_empty',
				array(
					':value'
				)
			),
			array(
				'Upload::type',
				array(
					':value',
					array (
						'jpg',
						'png',
						'gif'
					)
				)
			)
		));
		
		if ( $validate->check() ) {
			$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$images = ORM::factory('image');
			$images->ext = '.'.$ext;
			$images->text = strip_tags(Arr::get($_POST,'text',''));
			$id = $images->save()->id;
			mkdir('./images/'.$id, 755);
			$filename = Upload::save($_FILES['image'], 'original.'.$ext, './images/'.$id.'/');	
			$this->create_image_thumb($filename, $id, $ext);
			return true;
		} else {
			$this->errors = $validate->errors('upload');
			return false;
		}
	}
	
	public function action_index()
	{
		if ( isset($_POST['submit']) ) {
			if ( $this->upload_image() ) {
				$this->template->noerrors = '';
			} else {
				$this->template->errors = $this->errors;
			}
		}
		$images = ORM::factory('image');
		$this->template->images = $images->find_all();
	}
	
	public function action_get_image()
	{
		$this->auto_render = FALSE;
		if ( Arr::get($_SERVER,'HTTP_X_REQUESTED_WITH','') == 'XMLHttpRequest' ) {
			$image = ORM::factory('image', Arr::get($_POST, 'id'));
			$image = Arr::merge($image->as_array(), Arr::extract((array) Image::factory('images/'.$image->id.'/original'.$image->ext), array('width', 'height')));
			
			$this->response->headers('Content-Type: application/json; charset=utf-8');
			$this->response->body(json_encode($image));
		} else {
			$this->response->body('Only AJAX request');
		}
	}
	
} // End Main
