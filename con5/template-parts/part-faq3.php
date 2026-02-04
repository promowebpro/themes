<div class="container mb-5 mt-5 faq3">
	<h2 class=" border-bottom py-2"><?=$args->title?></h2>

<div class="items">
<?php 

foreach ($args->items as $item) { ?>
<div class="item">
		<h3><?=$item->question?></h3>
		<div class="answer"><?=$item->answer?></div>
	</div>
<?php } ?>
</div>

