<?php if (empty($args)) return '';  ?>
<section class="features5">
	<div class="features5__container">
		<div class="features5__header">
			<?php if (!empty($args->title) || !empty($args->text)) { ?>
				<h2 class="features5__title"><?=$args->title?></h2>
			<?php } ?>
			<?php if (!empty($args->text)) { ?>
					<div class="features5__text"><?=$args->text?></div>
			<?php } ?>
			
		</div>
		
		<?php if (!empty($args->items)) { ?>
		<div class="features5__items">
			<?php foreach ($args->items as $item) { ?>
			<div class="features5__item">
				<?php if (!empty($item->title)) { ?> 
					<h3 class="features5__item-title"><?=$item->title?></h3>
				<?php } ?>
				<?php if (!empty($item->text)) { ?> 	
				<div class="features5__item-text">
					<?=$item->text?>
				</div>
				<?php } ?>
				<?php if (!empty($item->url)) { ?> 
				<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features5__item-link">
								<?=$item->url->title?>
							</a>
				<?php } ?>
			</div>
			<?php } ?>
			
		</div>
		<?php } ?>
	</div>
</section>