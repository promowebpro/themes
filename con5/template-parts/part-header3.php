<?php 


	
	$header_style="";
	
	if (!empty($args->image)) $header_style="background-image:url(".$args->image.");";
	//if (!empty($args->height)) $header_style.="height:".$args->height."px;";
	if (!empty($args->color)) {?>
		<style>
			header * {color:<?=$args->color?>!important;}
		</style>
	<?php }
?>

  <header class="header3 py-5" style="<?=$header_style?>">
  <div class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4  container">
    <?php the_custom_logo();?>
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none site-descrition"> <span class="fs-4 site-name"><?php  bloginfo('name');?><span class="site-description"><?php  bloginfo('description');?></span> </a>

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
 
