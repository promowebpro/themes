<?php if (empty($args)) return '';  ?>
<?php $sticky = get_option('sticky_posts'); ?>

<section class="posts9">
        <div class="posts9__wrapper">
            <header class="posts9__header">
				<?php if (!empty($args->title)) { ?>
						<h2 class="posts9__heading"><?=$args->title?></h2>
				<? } ?>
				<?php if (!empty($args->text)) { ?>
						<p class="posts9__description"><?=$args->text?></p>
				<? } ?>
			</header>
			
			<?php 
		
				$args_data = array(
				'posts_per_page'      => '1',
				'post__in' => $sticky
				);
				$query = new WP_Query( $args_data );
			
			?> 
			
            <div class="posts9__masonry">
				<?php while ( $query->have_posts() ) {
					$query->the_post();
				?>
			
        <article class="posts9__card posts9__card--featured">
            <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts9__card-image">
            <div class="posts9__card-body">
                <h3 class="posts9__card-title"><?=$post->post_title?></h3>
                <p class="posts9__card-excerpt"><?php the_excerpt() ?></p>
                <a href="<?=$post->guid?>" class="posts9__card-link"><?=$args->show_more_text?></a>
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
		 <article class="posts9__card ">
            <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" class="posts9__card-image">
            <div class="posts9__card-body">
                <h3 class="posts9__card-title"><?=$post->post_title?></h3>
                <p class="posts9__card-excerpt"><?php the_excerpt() ?></p>
                <a href="<?=$post->guid?>" class="posts9__card-link"><?=$args->show_more_text?></a>
            </div>
        </article>
		<? } ?>
       
    </div>
        </div>
    </section>