<section class="section faq4 section--third" id="faq2">
			<div class="container faq2__container animation-in" style="transition: transform 0.3s cubic-bezier(0, 0.55, 0.45, 1), opacity 0.3s cubic-bezier(0, 0.55, 0.45, 1);">
			<div class="d4plashkat p-5 mb-5">
			<?php if(!empty($args->title)) { ?> 
				<h2 class="faq2__heading heading "><?=$args->title?></h2>
			<?php } ?>
			<?php if(!empty($args->text)) { ?> 
				<div class="faq2__desc text">
					<?=$args->text?>
				</div>
			<?php } ?>	
				
			</div>	
				<ul class="faq4__list pb-5">
				<?php 
				foreach ($args->items as $item) { ?>
				<li class="faq4__item py-3">
						<h3 class="faq4__question">
							<?=$item->question?>
						</h3>
						<div class="faq4__answer">
							<p><?=$item->answer?></p>
						</div>
					</li>
					
				<?php } ?>
				
					
					
				</ul>
			</div>
		</section>
		
		