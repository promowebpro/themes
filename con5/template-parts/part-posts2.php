<?php 
$posts_count="10";
$posts_count = get_field('posts_count','option');
$sticky = get_option('sticky_posts');
$args = array(
		'posts_per_page'      => $posts_count,
        'post__not_in' => $sticky
    );
$query = new WP_Query( $args );
//echo count($query->posts);
//echo "<pre>";print_r($query);echo"</pre>";
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				
				<?php
			endif;
			?>
			
			<?php 
			$i=0;
			while ( $query->have_posts() ) {
				$query->the_post();
				if ($i % 2 == 0) {  
					$order1=""; $order2="";
				}
				else {$order1=" order-md-2"; $order2=" order-md-1";}
				?>
				<div class="row featurette">
				  <div class="col-md-7<?=$order1?>">
					<h2 class="featurette-heading fw-normal lh-1"><?=$post->post_title?></h2>
					<p class="lead"><?php the_excerpt() ?></p>
				  </div>
				  <div class="col-md-5<?=$order2?>"  style="width: 500px; height:500px;
					background-size: cover; background-position:center center; background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID ); ?>)">
					
				  </div>
			</div>
<hr class="featurette-divider">

		

				<?php
			$i++;
			}
			?> 
			
			<?php 
			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

?>

			
