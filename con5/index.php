<?php
/**
 * Template name: front3
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test5
 */

//get_header();



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
	
	$json =get_option('kw_fields');
	$data = json_decode($json);
	//echo "<pre>";print_r($data);echo"</pre>";
	$ver_header="header1";
	$ver_features="features1";
	$ver_sticky="sticky1";
	$ver_posts="posts1";
	$ver_faq="faq1";
	$ver_contact="contact1";
	
	get_template_part( 'template-parts/part', $ver_header, $data->header);
	?>
	
	
	
		
</div>

<?php
get_template_part( 'template-parts/part',$ver_features,$data->features);

//get_template_part( 'template-parts/part','sticky'.$tpl_settings['sticky_tpl']);
get_template_part( 'template-parts/part',$ver_sticky);
?>

<?php 

//get_template_part( 'template-parts/part-slider');
 ?>

	<main id="primary" class="site-main container">

		<?php
		
		get_template_part( 'template-parts/part',$ver_posts );
 
		?>
<?php 


get_template_part( 'template-parts/part',$ver_faq,$data->faq);

 ?>
	</main><!-- #main -->

<?php

get_template_part( 'template-parts/part',$ver_contact,$data->contact);

get_sidebar();
get_footer();
