<?php 
$sticky = get_option('sticky_posts');

$args = array(
		'posts_per_page'      => 6,
        'post__not_in' => $sticky
    );
$query = new WP_Query( $args );


		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
				<?php
			endif;
			?>
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php 
			while ( $query->have_posts() ) {
				$query->the_post();
				//echo "<pre>";print_r($post);echo"</pre>";
				?>
				
				<div class="col">
  <div class="card shadow-sm" style="border-radius:0;">
    <div  style="width: 100%; height:200px;
    background-size: cover; background-position:center center; background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID ); ?>)">
      
    </div>
    <div class="card-body">
	  <p><a href="<?=$post->guid?>" class="icon-link gap-1 icon-link-hover stretched-link"><?=$post->post_title?>
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a></p>
      <p class="card-text"><?php //the_excerpt() ?></p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          
          
        </div> </div>
    </div>
  </div>
</div>

				<?php

			}
			?> 
			</div>
			<?php 
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

?>

			
