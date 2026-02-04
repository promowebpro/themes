<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package source
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'source' ); ?></a>

	<?php 
	$tpl_settings=get_field('tpl_settings','options');
	$header_color=get_field('header_color','options');
	$header_height=get_field('header_height','options');
	
	$header_style="";
	
	if (!empty($header_color)) $header_style="background-color:".$header_color.";";
	if (!empty($header_height)) $header_style.="height:".$header_height."px;";
	
	//echo "<pre>";print_r($tpl_settings);echo"</pre>";
	
	get_template_part( 'template-parts/part', 'header'.$tpl_settings['header_tpl'], $header_style );
	?>
	
	
	
		
</div>
		


	
