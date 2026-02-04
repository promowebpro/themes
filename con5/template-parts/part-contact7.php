<section class="contact7">
	<div class="contact7__wrapper">
		<div class="contact7__details">
			<?php if (!empty($args->title)) { ?>
				<h2 class="contact7__heading"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?> 
				<div class="contact7__lead">
					<?=$args->text?>
				</div>
			<? } ?>	
			<?php if (!empty($args->email)) { ?>
				<div class="contact7__mail">
					<a href="mailto:<?=$args->email?>"><?=$args->email?></a>
				</div>
			<? } ?>
			
		</div>
		<div class="contact7__panel">
			<?php if (!empty($args->form)) { ?> 
			<form class="contact7__form">
			<?php 
				$i=0;
				foreach ($args->form->fields as $item) { 
					if ($item->type!="textarea") {
				?>
				
				<div class="contact7__field">
					<label class="contact7__label" for="field-<?=$i?>"><?=$item->name?></label>
					<input type="<?=$item->type?>" class="contact7__input" id="field-<?=$i?>" name="field-<?=$i?>" placeholder="<?=$item->name?>"/>
				</div>
				<? } 
				else { ?>
			
					
					<div class="contact7__field">
						<label class="contact7__label" for="field-<?=$i?>"><?=$item->name?></label>
						<textarea
							class="contact7__textarea"
							id="field-<?=$i?>"
							name="field-<?=$i?>"
							placeholder="<?=$item->name?>">
						</textarea>
					</div>
					<? } ?>
				<? } ?>
				<button type="submit" class="contact7__button">
					<?=$args->form->submit_text?>
				</button>
			</form>
			<? } ?>
		</div>
	</div>
</section>