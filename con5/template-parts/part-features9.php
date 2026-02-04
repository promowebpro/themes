<?php if (empty($args)) return '';  ?>
<section class="features9">
	<div class="features9__background"></div>
	<div class="features9__wrapper">
		<header class="features9__header">
			<?php if (!empty($args->title) || !empty($args->text)) { ?>
				<h2 class="features9__heading">Что мы делаем лучше всех</h2>
			<?php } ?>
			<?php if (!empty($args->text)) { ?>
					<div class="features9__description"><?=$args->text?></div>
			<?php } ?>
			
		</header>
		<?php if (!empty($args->items)) { ?>
		<div class="features9__collection">
			<?php foreach ($args->items as $item) { ?>
			<div class="features9__card">
				<div class="features9__card-content">
						<?php if (!empty($item->title)) { ?> 
							<h3 class="features9__card-title"><?=$item->title?></h3>
						<?php } ?>
						<?php if (!empty($item->text)) { ?> 
						<div class="features9__card-text">
							<?=$item->text?>
						</div>
						<?php } ?>
						<?php if (!empty($item->url)) { ?> 
							<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="features9__card-action">
								<?=$item->url->title?>
							</a>
						<?php } ?>
						
				</div>
			</div>
			<?php } ?>
			
			
			
		</div>
		<?php } ?>
	</div>
</section>