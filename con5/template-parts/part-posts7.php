<?php if (empty($args)) return '';  ?>
<?php $sticky = get_option('sticky_posts'); ?>

<section class="posts7">
	<div class="posts7__wrapper">
		<header class="posts7__head">
			<?php if (!empty($args->title)) { ?>
					<h2 class="posts7__heading"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?>
					<div class="posts7__lead"><?=$args->text?></div>
			<? } ?>
			
		</header>
		
		<?php 
		
		$args_data = array(
		'posts_per_page'      => '1',
        'post__in' => $sticky
		);
		$query = new WP_Query( $args_data );
		
		?> 
		
		<div class="posts7__collection">
			<?php while ( $query->have_posts() ) {
					$query->the_post();
			?>

			<article class="posts7__article posts7__article--featured">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts7__visual"/>
				<div class="posts7__text">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts7__title"><?=$post->post_title?></h3>
					<?php } ?> 
					<p class="posts7__summary">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts7__action"><?=$args->show_more_text?></a>
					
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
				
			<article class="posts7__article">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts7__visual"/>
				<div class="posts7__text">
					<?php if (!empty($post->post_title)) { ?>
						<h3 class="posts7__title"><?=$post->post_title?></h3>
					<?php } ?> 
					<p class="posts7__summary">
						<?php the_excerpt() ?>
					</p>
					<a href="<?=$post->guid?>" class="posts7__action"><?=$args->show_more_text?></a>
				</div>
			</article>

			<? } ?>
		</div>
	</div>
</section>