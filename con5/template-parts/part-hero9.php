<?php if (empty($args)) return '';  ?>
<?php if (!empty($args->bg_image)) {
			$style=" style=\"background-image: url('".$args->bg_image."');\"";
	} else $style="";
	
	?>
<section class="hero9">
	
	<div class="hero9__media" <?=$style?>></div>
	<div class="hero9__gradient"></div>
	<div class="hero9__wrapper">
		<div class="hero9__text">
			<?php if (!empty($args->title)) { ?> 
				<h1 class="hero9__heading"><?=$args->title?></h1>
			<? } ?>
			<?php if (!empty($args->text) ) { ?>
			<p class="hero9__lead">
				<?=$args->text?>
			</p>
			<? } ?>
		</div>
	</div>
</section>