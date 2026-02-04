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
		if ( have_posts() ) : ?>

			<div class="posts3">
			
			<?php
		
			while ( $query->have_posts() ) {
				$query->the_post();
				
				?>
					<a class="w30" href="<?=$post->guid?>">
	<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary" style="height:100%;
					background-size: cover; background-position:center center; background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID ); ?>)"> 
		<div class="whitebg"> 
		<?php if (!empty($post->post_title)) { ?>
			<div class="display-6"><?=$post->post_title?></div>
		<?php } ?>
		
	
		</div> 
	</div>
</a>


		

				<?php
		
			}
			?> 
			</div>
			<?php 
			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

?>

			
