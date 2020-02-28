<?php


?><!DOCTYPE html>

<html >

	<head>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.js"></script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>

	</head>

	<body>


	<img src="<?php echo get_field('logo', 'option')['sizes']['thumbnail']; ?>" />

<?php
wp_nav_menu(
										array(
											'menu'            => 'primary',
											'container'  => 'div',
											'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
																					)
									);
?>


	<h1>Header</h1>
	<h2>
	
	</h2>
	
	
