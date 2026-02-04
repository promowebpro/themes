<?php if (empty($args)) return ''; 


	
	
	$header_style="";
	
	if (!empty($args->image)) $header_style="background-image:url(".$args->image.");";
	if (!empty($args->bgcolor)) $header_style2="background-color:".$args->bgcolor.";";
	if (!empty($args->height) && is_front_page()) $header_style.="height:".$args->height."px;";
	
	if (!empty($args->color)) {?>
		<style>
			header * {color:<?=$args->color?>!important;}
		</style>
	<?php }
?>

  <header class="header4 mb-5" style="<?=$header_style?>">
  <div class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4 container">
    <?php the_custom_logo();?>
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none site-descrition"> <span class="fs-4"><?php  bloginfo('name');?></span> </a>

      <?php 
$menu = wp_nav_menu( [
	

	'container'       => 'ul',
	'container_class' => 'nav header__nav',
	'menu_class'      => 'nav nav-pills',
	'menu_id'         => 'my-id',
	

	'echo' => true,
] );

echo ( $menu );

?></div>
<div class="container justify-content-center d-flex flex-wrap  border-bottom display-6 pb-2"><?php  bloginfo('description');?></div>
<div class="container mt-5 p-5 d-flex align-items-center display-6 mb-5 text-box" style=" color:<?=$args->color?>">
<?php //if (is_front_page()) 
	echo $args->text?>
</div>
  </header>
