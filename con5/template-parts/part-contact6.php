<?php if (empty($args)) return '';  ?>


<section class="contact6">
	<div class="contact6__container">
		<div class="contact6__info">
			<?php if (!empty($args->title)) { ?>
				<h2 class="contact6__title"><?=$args->title?></h2>
			<? } ?>
			<?php if (!empty($args->text)) { ?> 
				<div class="contact6__description">
					<?=$args->text?>
				</div>
			<? } ?>	
			<?php if (!empty($args->email)) { ?>
				<div class="contact6__email">
					<a href="mailto:<?=$args->email?>"><?=$args->email?></a>
				</div>
			<? } ?>

			
		</div>
		<?php if (!empty($args->form)) { ?> 
		<div class="contact6__form-wrapper">
			<form class="contact6__form">
				<?php 
				$i=0;
				foreach ($args->form->fields as $item) { 
					if ($item->type!="textarea") {
				?>
						<div class="contact6__form-row">
							<label class="contact6__form-label" for="field-<?=$i?>"><?=$item->name?></label>
							<input type="<?=$item->type?>" class="contact6__form-input" id="field-<?=$i?>" name="field-<?=$i?>" placeholder="<?=$item->name?>"/>
						</div>
				<? }
					else { ?>
						<div class="contact6__form-row">
							<label class="contact6__form-label" for="field-<?=$i?>"
								><?=$item->name?></label
							>
							<textarea
								class="contact6__form-textarea"
								id="field-<?=$i?>"
								name="field-<?=$i?>"
								placeholder="<?=$item->name?>"
							></textarea>
						</div>
						
					<? }
				$i++;
				} ?>
				

				
				
				

				<button type="submit" class="contact6__form-button">
					<?=$args->form->submit_text?>
				</button>
			</form>
		</div>
		<? } ?>
	</div>
</section>