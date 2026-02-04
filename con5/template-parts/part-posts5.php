<?php if (empty($args)) return '';  ?>
<?php $sticky = get_option('sticky_posts'); ?>
				
<section class="posts5">
	<div class="posts5__container">
		
				
			
		<div class="posts5__header">
			<?php if (!empty($args->title)) { ?>
				<h2 class="posts5__title"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?>
						<div class="posts5__text"><?=$args->text?></div>
				<? } ?>
			
		</div>
		
		<?php 
		
				$args_data = array(
				'posts5_per_page'      => '1',
				'post__in' => $sticky
				);
				$query = new WP_Query( $args_data );
			
			?>
			
		<div class="posts5__grid">
		<?php while ( $query->have_posts() ) {
					$query->the_post(); ?>
				<article class="posts5__item posts5__item--sticky">
					<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>"
						class="posts5__item-image"/>
					<div class="posts5__item-content">
						<h3 class="posts5__item-title">
							<?=$post->post_title?>
						</h3>
						<p class="posts5__item-excerpt">
							<?php the_excerpt() ?>
						</p>
						<a href="<?=$post->guid?>" class="posts5__item-link"><?=$args->show_more_text?></a>
						
					</div>
				</article>
			<? } ?>
			<?php 
		
				$args_data = array(
				'posts5_per_page'      => $args->posts_count,
				'post_not_in' => $sticky
				);
				$query = new WP_Query( $args_data );
				
			?> 
			<?php while ( $query->have_posts() ) {
					$query->the_post(); ?>
			<article class="posts5__item">
					<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>"
						class="posts5__item-image"/>
					<div class="posts5__item-content">
						<h3 class="posts5__item-title">
							<?=$post->post_title?>
						</h3>
						<p class="posts5__item-excerpt">
							<?php the_excerpt() ?>
						</p>
						<a href="<?=$post->guid?>" class="posts5__item-link"><?=$args->show_more_text?></a>
						
					</div>
				</article>
			<? } ?>
			
		</div>
	</div>
</section>