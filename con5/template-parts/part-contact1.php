<?php ?>
<section class="contact 1 container" >
<?php if(!empty($args->title)) { ?> 
						<h2 class="mt-5 mb-2"><?=$args->title?></h2>
					<?php } ?>
			<div class="container border">
				
				<div class="p-5">
					
					<?php if(!empty($args->text)) { ?> 
					<div class="cta3__desc">
						<?=$args->text?>
					</div>
					<?php } ?>
					
					<?php if(!empty($args->form)) { ?> 
					<form class="cta3__form" action="#">
						<div class="cta3__formInputsList">
						<?php foreach ($args->form->fields as $item) { ?> 
							<div class="inputBlock my-2">
								<input class="inputBlock__input" type="<?=$item->type?>" placeholder="<?=$item->name?>">
							</div>
						<?php } ?>
						
						</div>
						<button class="btn btn-primary" type="submit"><?=$args->form->submit_text?></button>
					</form>
					<?php } ?>
				</div>
			</div>
		</section>