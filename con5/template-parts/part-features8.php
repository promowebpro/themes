<section class="features8">
	<div class="features8__container">
		<?php if (!empty($args->title) || !empty($args->text)) { ?>
			<div class="features8__header">
			<?php if (!empty($args->title)) { ?>
							<h2 class="features8__title"><?=$args->title?></h2>
					<?php } ?>
					<?php if (!empty($args->text)) { ?>
							<div class="features8__subtitle"><?=$args->text?></div>
					<?php } ?>
			</div>
		<? } ?>
		<?php if (!empty($args->items)) { ?>
		<div class="features8__slider">
			<div class="features8__track">
				<?php foreach ($args->items as $item) { ?>
					<div class="features8__slide">
						<?php if (!empty($item->title)) { ?> 
							<h3 class="features8__slide-title"><?=$item->title?></h3>
						<? } ?>
						<?php if (!empty($item->text)) { ?> 
						<div class="features8__slide-content">
							<?=$item->text?>
						</div>
						<? } ?>
						<?php if (!empty($item->url)) { ?> 
							<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features8__slide-link">
								<?=$item->url->title?>
							</a>
						<? } ?>
						
					</div>
				<? } ?>
				

			</div>
		</div>
		<? } ?>
	</div>
</section>