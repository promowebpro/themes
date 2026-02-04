<?php 

$header_color=get_field('header_color','options');
	$header_height=get_field('header_height','options');
	
	$header_style="";
	
	if (!empty($header_color)) $header_style="background-color:".$header_color.";";
	if (!empty($header_height)) $header_style.="height:".$header_height."px;";
	
?>
<div class="container">
  <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4 border-bottom " style="<?=$header_style?>">
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

echo htmlspecialchars( $menu );

?>
  </header>
</div>