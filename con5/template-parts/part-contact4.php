<?php ?>
<div class="section ctaBlock cta3 contact4" id="cta3">
			<div class="container cta3__container">
				
				
					<?php if(!empty($args->title)) { ?> 
						<h2 class="cta3__heading  text-center display-6 pb-5 mb-5"><?=$args->title?></h2>
					<?php } ?>
					<?php if(!empty($args->text)) { ?> 
					<div class="cta3__desc  text-center mt-3">
						<?=$args->text?>
					</div>
					<?php } ?>
					
					<?php if(!empty($args->form)) { ?> 
					<form class="my-5 p-4 p-md-5 border rounded-3 bg-body-tertiary" action="#">
						
						<?php foreach ($args->form->fields as $item) { ?> 
							<div class="form-floating mb-3">
								<input class="form-control" id="<?=$item->type?>"  type="<?=$item->type?>" placeholder="<?=$item->name?>">
								<label for="<?=$item->type?>"><?=$item->name?></label>
							</div>
						<?php } ?>
						
						
						<button class="w-100 btn btn-lg btn-primary" type="submit"><?=$args->form->submit_text?></button>
						  <hr class="my-4"> <small class="text-body-secondary">Нажимая "отправить" Вы соглашаетесь с политикой конфиденциальнойсти и обработки данных.</small>
					</form>
					<?php } ?>
				
			</div>
		</div>
		
		