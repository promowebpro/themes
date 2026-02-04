<?php
/**
 * Template name: front6
 * 
 */

//get_header();


	$ver_id="6";
	
	$json =get_option('kw_fields');
	$data = json_decode($json);
	$ver_header="header".$ver_id;
	$ver_hero="hero".$ver_id;
	$ver_features="features".$ver_id;
	$ver_posts="posts".$ver_id;
	$ver_faq="faq".$ver_id;
	$ver_contact="contacts".$ver_id;
	$ver_footer="footer".$ver_id;
	
	
	
	
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" id="header<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/common.css" media="all">
	<link rel="stylesheet" id="header<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/header<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="hero<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/hero<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="features<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/features<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="posts<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/posts<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="faq<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/faq<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="contacts<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/contacts<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="contacts<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/footer<?=$ver_id?>.css" media="all">
	<link rel="stylesheet" id="footer<?=$ver_id?>-style-css" href="<?=get_template_directory_uri()?>/css/footer<?=$ver_id?>.css" media="all">
	<?php 
	
	if (!empty($data->setting)) {
	
	?>
	
	<style>
		:root {
			<?php foreach ($data->setting as $key => $value) {
				  echo $key. ": ".$value.";\n";
				} 
			?>
		}	
	</style>
	<? } ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'source' ); ?></a>

	<?php 
	
	
	get_template_part( 'template-parts/part', $ver_header, $data->header);
	?>
	
	
	
		
</div>

<?php
get_template_part( 'template-parts/part',$ver_hero,$data->hero);
get_template_part( 'template-parts/part',$ver_features,$data->features);

//get_template_part( 'template-parts/part','sticky'.$tpl_settings['sticky_tpl']);
//get_template_part( 'template-parts/part',$ver_sticky);
?>

<?php 

//get_template_part( 'template-parts/part-slider');
 ?>

	<main id="primary" class="site-main container">

		<?php
		
		get_template_part( 'template-parts/part',$ver_posts,$data->posts );
 
		?>
<?php 




 ?>
	</main><!-- #main -->

<?php
get_template_part( 'template-parts/part',$ver_faq,$data->faq);
get_template_part( 'template-parts/part',$ver_contact,$data->contact);
get_template_part( 'template-parts/part',$ver_footer);

//get_sidebar();
//get_footer();
