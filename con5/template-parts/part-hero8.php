
		<section class="hero8">
	<div class="hero8__container">
		<div class="hero8__content">
			<?php if (!empty($args->title)) { ?> 
				<h1 class="hero8__title"><?=$args->title?></h1>
			<? } ?>
			<?php if (!empty($args->text) ) { ?>
			<div class="hero8__subtitle">
				<?=$args->text?>
			</div>
			
			
		</div>
		<? } ?>
	</div>
	<?php if (!empty($args->bg_image)) {
			$style=" style=\"
			background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200');
		\"";
	} else $style="";
	
	?>
	<!-- Картинку тоже надо заменять. -->
	<div class="hero8__bg" <?=$style?>></div>
</section>