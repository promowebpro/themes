<?php if (empty($args)) return '';  ?>
<?php if (!empty($args->bg_image)) {
			$style=" style=\"
			background-image: url('".$args->bg_image."');
		\"";
	} else $style="";
	
	?>
<section class="contact8"<?=$style?>>
	<div class="contact8__overlay"></div>
	<div class="contact8__container">
		<div class="contact8__box">
			<?php if (!empty($args->title)) { ?>
				<h2 class="contact8__title"><?=$args->title?></h2>
			<?php } ?>
			
			<?php if (!empty($args->text)) { ?> 
				<div class="contact8__subtitle">
					<?=$args->text?>
				</div>
			<?php } ?>	
			
			<?php if (!empty($args->email)) { ?>
				<div class="contact8__email">
					<a href="mailto:<?=$args->email?>"><?=$args->email?></a>
				</div>
			<?php } ?>
			
		</div>
		<div class="contact8__form-box">
			<?php if (!empty($args->form)) { ?> 
			<form class="contact8__form">
				<?php 
				$i=0;
				foreach ($args->form->fields as $item) { 
					if ($item->type!="textarea") {
				?>
				<div class="contact8__field">
					<label class="contact8__label" for="field-<?=$i?>"><?=$item->name?></label>
					<input
						type="<?=$item->type?>"
						class="contact8__input"
						id="field-<?=$i?>"
						name="field-<?=$i?>"
						placeholder="<?=$item->name?>"
					/>
				</div>
				<? } 
				else { ?>
					<div class="contact8__field">
						<label class="contact8__label" for="field-<?=$i?>"><?=$item->name?></label>
						<input
							type="<?=$item->type?>"
							class="contact8__input"
							id="field-<?=$i?>"
							name="field-<?=$i?>"
							placeholder="<?=$item->name?>"
						/>
					</div>
					<?php } ?>
				<?php } ?>
				<button type="submit" class="contact8__submit">
					<?=$args->form->submit_text?>
				</button>
			</form>
			<?php } ?>
		</div>
	</div>
</section>