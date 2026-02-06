<?php if (empty($args)) return '';  ?>

<section class="faq6" id="faq6" name="faq6">
	<div class="faq6__container">
		<?php if (!empty($args->title) || !empty($args->text)) { ?>
		<div class="faq6__intro">
			<?php if (!empty($args->title)) { ?>
					<h2 class="faq6__title"><?=$args->title?></h2>
			<? } ?>
				
			<?php if (!empty($args->text)) { ?> 
				<div class="faq6__description">
					<?=$args->text?>
				</div>
			<? } ?>
		</div>
		<? } ?>
		
		<?php if (!empty($args->items)) { $i=0; ?>
		
			<div class="faq6__list">
			<?php foreach ($args->items as $item) { ?>
				<div class="faq6__item" data-index="<?=$i?>">
					<button type="button" class="faq6__question-wrapper">
						<?php if (!empty($item->question)) { ?>
							<span class="faq6__question"><?=$item->question?></span>
						<?php } ?>
						<div class="faq6__icon">+</div>
					</button>
						<?php if (!empty($item->answer)) { ?> 
							<div class="faq6__answer">
								<div class="faq6__answer-content"><?=$item->answer?></div>
							</div>					
						<? } ?>
				</div>
			
			<? } ?>
			</div>

			
		
		<?php $i++;  } ?>
	</div>
</section>
