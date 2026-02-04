<?php if (empty($args)) return '';  ?>
<?php $sticky = get_option('sticky_posts'); ?>

<section class="posts8">
	<div class="posts8__container">
		<div class="posts8__header">
			<?php if (!empty($args->title)) { ?>
					<h2 class="posts8__title"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?>
					<div class="posts8__subtitle"><?=$args->text?></div>
			<? } ?>
		</div>
		
		<?php 
		
		$args_data = array(
		'posts_per_page'      => '1',
        'post__in' => $sticky
		);
		$query = new WP_Query( $args_data );
		
		?> 
		
		<div class="posts8__feed">
			
			<?php while ( $query->have_posts() ) {
					$query->the_post();
			?>
			
			<article class="posts8__item posts8__item--sticky">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts8__image"/>
				<div class="posts8__body">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts8__name"><?=$post->post_title?></h3>
					<?php } ?> 
					
					<p class="posts8__excerpt">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts8__link"><?=$args->show_more_text?></a>
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
				
			<article class="posts8__item">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts8__image"/>
				<div class="posts8__body">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts8__name"><?=$post->post_title?></h3>
					<?php } ?> 
					
					<p class="posts8__excerpt">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts8__link"><?=$args->show_more_text?></a>
				</div>
				
				
			</article>
			<? } ?>
			
		</div>
	</div>
</section>