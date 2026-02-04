<?php if (empty($args)) return '';  ?>

<section class="contacts5">
	<div class="contacts5__container">
		<div class="contacts5__header">
			<?php if (!empty($args->title)) { ?>
				<h2 class="contacts5__title"><?=$args->title?></h2>
			<?php } ?>
			<?php if (!empty($args->text)) { ?> 
				<p class="contacts5__text">
					<?=$args->text?>
				</p>
			<?php } ?>	
			
			
			
		</div>
		<div class="contacts5__content">
			<?php if (!empty($args->form)) { ?> 
			<form class="contacts5__form">
				
				<?php 
				$i=0;
				foreach ($args->form->fields as $item) { 
					if ($item->type!="textarea") {
				?>
				
				<div class="contacts5__form-field">
					<label class="contacts5__form-label" for="field-<?=$i?>"><?=$item->name?></label>
					<input type="text" class="contacts5__form-input" id="field-<?=$i?>" name="field-<?=$i?>" 		placeholder="<?=$item->name?>"/>
				</div>
				<?php } else { ?>
					<div class="contact9__row">
						<label class="contacts5__form-label" for="field-<?=$i?>"><?=$item->name?></label>
						<textarea class="contacts5__form-textarea" id="field-<?=$i?>"
							name="field-<?=$i?>" placeholder="<?=$item->name?>"></textarea>
					</div>
				<?php } ?>
				
				
				<?php } ?>	
				
				<button type="submit" class="contacts5__form-submit">
					<?=$args->form->submit_text?>
				</button>
				
			</form>
			<?php } ?>	
		</div>
	</div>
</section>