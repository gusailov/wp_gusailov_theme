<?php


?><!DOCTYPE html>

<html >

	<head>

		

	</head>

	<body>


	<img src="<?php echo get_field('logo', 'option')['sizes']['thumbnail']; ?>" />

<?php
wp_nav_menu(
										array(
											'container'  => 'div',
											'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											
										)
									);
?>


	<h1>Hello</h1>
	<h2>
	<?php
function add($first_number, $second_number) {
    return $first_number + $second_number;
}
$value = add(1, 3); // $value is set to 4
echo $value; // show $value in the HTML/browser

?>
	</h2>
	
	
