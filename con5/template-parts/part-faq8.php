<?php if (empty($args)) return '';  ?>

<section class="faq8">
	<div class="faq8__container">
		<?php if (!empty($args->title) || !empty($args->text)) { ?>
		<header class="faq8__title">
			<?php if (!empty($args->title)) { ?>
					<h2 class="faq7__heading"><?=$args->title?></h2>
			<?php } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<div class="faq8__subtitle">
					<?=$args->text?>
				</div>
			<?php } ?>
		</header>
		<?php } ?>
		
		<?php if (!empty($args->items)) { $i=0; ?>
		<div class="faq8__content">
			<?php foreach ($args->items as $item) { ?>
			<div class="faq8__item" data-index="<?=$i?>">
				<div class="faq8__question-box">
					<?php if (!empty($item->question)) { ?>
							<div class="faq8__question">
								<?=$item->question?>
							</div>
						<?php } ?>
				</div>
				<?php if (!empty($item->answer)) { ?> 
					<div class="faq8__answer">
						<div class="faq8__answer-text">
							<?=$item->answer?>
						</div>
					</div>
					<?php } ?>
			</div>
			<?php } ?>
			
			
		</div>
		<?php $i++; } ?>
	</div>
</section>