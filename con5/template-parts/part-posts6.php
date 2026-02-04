<?php //if (empty($args)) return '';  ?>
<?php $sticky = get_option('sticky_posts'); ?>

<section class="posts6">
	<div class="posts6__container">
		<div class="posts6__intro">
			<?php if (!empty($args->title)) { ?>
					<h2 class="posts6__title"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?>
					<div class="posts6__description"><?=$args->text?></div>
			<? } ?>
			
				
			
		</div>
		
		<?php 
		
		$args_data = array(
		'posts_per_page'      => '1',
        'post__in' => $sticky
		);
		$query = new WP_Query( $args_data );
		
		?> 
		<div class="posts6__list">
			<?php while ( $query->have_posts() ) {
					$query->the_post();
			?>
			<article class="posts6__card posts6__card--featured">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts6__card-image"/>
				<div class="posts6__card-body">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts6__card-title"><?=$post->post_title?></h3>
					<?php } ?> 
					
					
					<p class="posts6__card-excerpt">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts6__card-link"><?=$args->show_more_text?></a>
				</div>
			</article>
			<? } ?>
			
			<?php 
		
				$args_data = array(
				'posts_per_page'      => $args->posts_count,
				'post_not_in' => $sticky
				);
				$query = new WP_Query( $args_data );
				
			?> 
			<?php
		
			while ( $query->have_posts() ) {
				$query->the_post();
				
				?>
			<article class="posts6__card">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts6__card-image"/>
				<div class="posts6__card-body">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts6__card-title"><?=$post->post_title?></h3>
					<?php } ?> 
					<p class="posts6__card-excerpt">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts6__card-link"><?=$args->show_more_text?></a>
				</div>
			</article>
			<? } ?>
			
		</div>
	</div>
</section>