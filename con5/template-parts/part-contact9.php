<?php if (empty($args)) return '';  ?>
<?php if (!empty($args->bg_image)) {
			$style=" style=\"
			background-image: url('".$args->bg_image."');
		\"";
	} else $style="";
	
	?>
<section class="contact9">
	
	<div <?=$style?> class="contact9__backdrop"></div>
	<div class="contact9__layers">
		<div class="contact9__layer contact9__layer--1"></div>
		<div class="contact9__layer contact9__layer--2"></div>
		<div class="contact9__layer contact9__layer--3"></div>
	</div>
	<div class="contact9__wrapper">
		<div class="contact9__glass">
			<?php if (!empty($args->title)) { ?>
				<h2 class="contact9__heading"><?=$args->title?></h2>
			<?php } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<p class="contact9__description">
					<?=$args->text?>
				</p>
			<?php } ?>	
			<?php if (!empty($args->email)) { ?>
				<div class="contact9__info">
					<a href="mailto:<?=$args->email?>"><?=$args->email?></a>
				</div>
			<?php } ?>
			<?php if (!empty($args->form)) { ?> 
			<form class="contact9__form">
				<?php 
				$i=0;
				foreach ($args->form->fields as $item) { 
					if ($item->type!="textarea") {
				?>
				
				<div class="contact9__row">
					<label class="contact9__label" for="field-<?=$i?>"><?=$item->name?></label>
					<input type="text" class="contact9__input" id="field-<?=$i?>" name="field-<?=$i?>" 		placeholder="<?=$item->name?>"/>
				</div>
				<?php } else { ?>
					<div class="contact9__row">
						<label class="contact9__label" for="field-<?=$i?>"><?=$item->name?></label>
						<textarea class="contact9__textarea" id="field-<?=$i?>"
							name="field-<?=$i?>" placeholder="<?=$item->name?>"></textarea>
					</div>
				<?php } ?>
				<button type="submit" class="contact9__submit">
					<?=$args->form->submit_text?>
				</button>
			</form>
			<?php } ?>
		<?php } ?>
		</div>
	</div>
</section>