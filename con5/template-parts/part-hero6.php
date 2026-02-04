<?php 

//echo "<pre>";print_r($args);echo"</pre>";
?>
<section class="hero6">
	<div class="hero6__container">
		<div class="hero6__content">
		<?php if (!empty($args->text) || !empty($args->title)) { ?> 
			<?php if (!empty($args->title) ) { ?> 
				<h1 class="hero6__title"><?=$args->title?></h1>
			<? } ?>
			<?php if (!empty($args->text) ) { ?> 		
				<div class="hero6__text">
					<?=$args->text?>
				</div>
			<? } ?>
		<? } ?>
		</div>
		<div
			class="hero6__image"
			style="
				background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200');
			"
		></div>
	</div>
</section>