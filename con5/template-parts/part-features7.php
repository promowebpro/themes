<section class="features7">
	<div class="features7__wrapper">
		<header class="features7__head">
				
				<?php if (!empty($args->title)) { ?>
						<h2 class="features7__heading"><?=$args->title?></h2>
				<? } ?>
				<?php if (!empty($args->text)) { ?>
						<div class="features7__lead"><?=$args->text?></div>
				<? } ?>
					
		</header>
		<?php if (!empty($args->items)) { ?>
		<div class="features7__grid">
			<?php foreach ($args->items as $item) { ?>
				<div class="features7__card">
						
						<?php if (!empty($item->title)) { ?> 					
							<h3 class="features7__card-heading"><?=$item->title?></h3>
						<? } ?>
						<?php if (!empty($item->text)) { ?> 
							<div class="features7__card-body">
								<?=$item->text?>
							</div>
						<? } ?>
						<?php if (!empty($item->url)) { ?> 
							<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features7__card-action">
								<?=$item->url->title?>
							</a>
						<? } ?>
					
				</div>
			<? } ?>

			
		</div>
		<? } ?>
	</div>
</section>