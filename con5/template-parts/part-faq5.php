<section class="faq5">
	<div class="faq5__container">
		<div class="faq5__header">
			<?php if (!empty($args->title)) { ?>
					<h2 class="faq5__title"><?=$args->title?></h2>
			<?php } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<div class="faq5__text">
					<?=$args->text?>
				</div>
			<?php } ?>
			
			
		</div>
		
	
		<?php if (!empty($args->items)) { $i=0; ?>
		
		<div class="faq5__items">
			<?php foreach ($args->items as $item) { ?>
			
				<div class="faq5__item faq5__item--active" data-index="<?=$i?>">
					<?php if (!empty($item->question)) { ?>
								<div class="faq5__question">
									<?=$item->question?>
								</div>
							<?php } ?>
							
					<?php if (!empty($item->answer)) { ?> 
					<div class="faq5__answer">
						<div class="faq5__answer-text">
							<?=$item->answer?>
						</div>
					</div>
					<?php } ?>
				</div>

			<?php $i++; } ?>
		
		</div>
		<?php } ?>
	</div>
	
</section>