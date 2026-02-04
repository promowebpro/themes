<?php if (empty($args)) return '';  ?>

		<section class="features6">
			<div class="features6__container">
				<div class="features6__intro">
					<?php if (!empty($args->title)) { ?>
						<h2 class="features6__title"><?=$args->title?></h2>
					<? } ?>
					
					<?php if (!empty($args->text)) { ?>
						<div class="features6__description"><?=$args->text?></div>
					<? } ?>
				</div>
				
				<?php if (!empty($args->items)) { ?>
				
					<div class="features6__list">
						<?php foreach ($args->items as $item) { ?>
							 <div class="features6__item"> 
									<?php if (!empty($item->title)) { ?> 
										<h3 class="features6__item-title"><?=$item->title?></h3>
									<? } ?>
										<?php if (!empty($item->text)) { ?> 
										<div class="features6__item-content">
											<?=$item->text?>
										</div>
										<? }  ?>
										<?php if (!empty($item->url)) { ?> 
										<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features6__item-link"
											><?=$item->url->title?></a>
										<? } ?>
							</div>
						<?php } ?> 
					</div>
				
				<?php } ?>
			</div> 
		</section>