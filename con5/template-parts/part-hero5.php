<?php if (empty($args)) return '';  ?>
<?php if (!empty($args->bg_image)) {
			$style=" style=\"
			background-image: url('".$args->bg_image."');
		\"";
	} else $style="";
	
	?>
<section class="hero5">
	<div
		class="hero5__background" <?=$style?>></div>
	<div class="hero5__container">
		<?php if (!empty($args->title)) { ?> 
			<h1 class="hero5__title"><?=$args->title?></h1>
		<?php } ?>
		<?php if (!empty($args->text) ) { ?>
			<div class="hero5__text"><?=$args->text?></div>
		<?php } ?>
	</div>
</section>