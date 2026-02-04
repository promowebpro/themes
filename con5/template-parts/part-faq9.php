<section class="faq9">
	<div class="faq9__wrapper">
		<?php if (!empty($args->title) || !empty($args->text)) { ?>
		<div class="faq9__sidebar">
			<?php if (!empty($args->title)) { ?>
					<h2 class="faq9__heading"><?=$args->title?></h2>
			<?php } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<div class="faq9__description">
					<?=$args->text?>
				</div>
			<?php } ?>
		</div>
		<?php } ?>
		<?php if (!empty($args->items)) { $i=0; ?>
		<div class="faq9__main">
			<div class="faq9__list">
				<?php foreach ($args->items as $item) { ?>
					
						
					<div class="faq9__block" data-index="<?=$i?>">
						<button type="button" class="faq9__trigger">
							<?php if (!empty($item->question)) { ?>
								<div class="faq9__query">
									<?=$item->question?>
								</div>
							<?php } ?>
							<div class="faq9__indicator"></div>
						</button>
						<?php if (!empty($item->answer)) { ?> 
						<div class="faq9__panel">
							<div class="faq9__response">
								<?=$item->answer?>
							</div>
						</div>
						<?php } ?>
					</div>
					
				<?php $i++; } ?>
				
			</div>
		</div>
		<?php } ?>
		
	</div>
</section>