<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title><?php echo __('Simple Galery'); ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<?php
			echo HTML::style('css/style.css');
			echo HTML::script('js/jquery-1.6.4.min.js');
			echo HTML::script('js/gallery.js');
		?>
	</head>
	<body>
	<?php $count = count($images); ?>
		<div id="main">
			<?php if ($count > 12) { ?>
				<div id="go_prev"></div>
			<?php } ?>
			<div id="wrapper">
				<div id="container">
					<?php 
						for ($i = 1; $i <= ($count-1-($count-1)%12)/12+1; $i++) {
							echo '<ul class="imageslist">';
							for ($ii = ($i-1)*12; $ii < ($i)*12 && $ii < $count; $ii++) {
								$img_tag = HTML::image('images/'.$images[$ii]->id.'/thumb'.$images[$ii]->ext, array('id' => $images[$ii]->id, 'alt' => $images[$ii]->text));
								$link = HTML::file_anchor('images/'.$images[$ii]->id.'/original'.$images[$ii]->ext, $img_tag , array('title' => $images[$ii]->text));
								echo '<li>'.$link.'</li>';
							}
							echo '</ul>';
						} 
					?>
				</div>
			</div>
			<?php if ($count > 12) { ?>
				<div id="go_next"></div>
			<?php } ?>
			<?php

				if ( isset($errors['image']) ) {
					echo '<div class="error">'.$errors['image'].'</div>';
				} elseif ( isset($noerrors) ) {
					echo '<div class="noerror">'.__('Файл загружен успешно').'</div>';
				}
				
				echo Form::open(NULL, array('enctype' => 'multipart/form-data', 'class' => 'upload_form'));
				echo Form::label('img','Add image:');
				echo Form::file('image', array('id' => 'img'));
				echo '<br />';
				echo Form::textarea('text', '', array('rows' => 3, 'cols' => 50 ));
				echo '<br />';
				echo Form::submit('submit', 'Send');
				echo Form::close();
			?>
		</div>
	</body>
</html>