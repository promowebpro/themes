<div class="container mb-5 mt-5 faq2">
	<h2 class=" border-bottom py-2"><?=$args->title?></h2>


<?php 

foreach ($args->items as $item) { ?>
<div class="item">
		<h3><?=$item->question?></h3>
		<div class="answer"><?=$item->answer?></div>
	</div>
<?php } ?>
</div>

