<section class="hero7">
	<?php if (!empty($args->bg_image)) {
			$style=" style=\"
			background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200');
		\"";
	} else $style="";
	
	?>
	<div class="hero7__backdrop" <?=$style?>></div>
	<div class="hero7__wrapper">
		<div class="hero7__box">
			<?php if (!empty($args->title)) { ?> 
				<h1 class="hero7__heading"><?=$args->title?></h1>
			<? } ?>
			<?php if (!empty($args->text) ) { ?>
			<div class="hero7__description">
				<?=$args->text?>
			</div>
			<? } ?>
		</div>
	</div>
</section>