<?php if (empty($args)) return '';  ?>

<section class="faq7">
	<div class="faq7__wrapper">
		<?php if (!empty($args->title) || !empty($args->text)) { ?>
		<header class="faq7__head">
			<?php if (!empty($args->title)) { ?>
					<h2 class="faq7__heading"><?=$args->title?></h2>
			<? } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<div class="faq7__lead">
					<?=$args->text?>
				</div>
			<? } ?>
		</header>
		<? } ?>
		
		<?php if (!empty($args->items)) { $i=0; ?>
		<div class="faq7__accordion">
			<?php foreach ($args->items as $item) { ?>
				<div class="faq7__entry" data-index="<?=$i?>">
					<button class="faq7__trigger" type="button">
						<?php if (!empty($item->question)) { ?>
							<div class="faq7__query">
								<?=$item->question?>
							</div>
						<? } ?>
						<div class="faq7__toggle"></div>
					</button>
					<?php if (!empty($item->answer)) { ?> 
					<div class="faq7__content">
						<div class="faq7__response">
							<?=$item->answer?>
						</div>
					</div>
					<? } ?>
				</div>

			<? } ?>

			
		</div>
		<? } ?>
	</div>
</section>