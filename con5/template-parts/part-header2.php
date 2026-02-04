<?php 
	
	
	$header_style="";
	if (!empty($args->bgcolor)) $header_style="background-color:".$args->bgcolor.";";
	if (!empty($args->image)) $header_style="background-image:url(".$args->image.");";
	
	if (!empty($args->height) && is_front_page()) $header_style.="height:".$args->height."px;";
	
	if (!empty($args->color)) {?>
		<style>
			header * {color:<?=$args->color?>!important;}
		</style>
	<?php }
?>
<div class="container">
		
  <header class="justify-content-center py-3 header2 border " style="<?=$header_style?>">
  <div class="headerbox_logo">
		<?php the_custom_logo();?><a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none site-descrition">  <span class="fs-4"><?php  bloginfo('name');?><br><span class="fs-5"><?php  bloginfo('description');?></span></span> </a> 
		</div>
  <div class="d-flex justify-content-center py-3">
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

  </header>
  
  
 