<div class="container features4">

<?php if (!empty($args->title)) { ?>
	<h2 class="my-5 p-3"><?=$args->title?></h2>
<?php } ?> 

 <div class="row g-4 py-5 row-cols-2 row-cols-lg-2 mt-5 mb-5"> 
<?php 

 

 
 
 foreach ($args->items as $item) { ?>
	 <div class="feature item flex mb-5"> 
		
			<div class="content">
			<h3 class="fs-2 text-body-emphasis"><?=$item->title?></h3>
			<p><?=$item->text?></p>
			<?php if (!empty($item->url)) { ?>
			<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="icon-link">
				<?=$item->url->title?>
			<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> 
			
			<?php } ?>
</div>
</div> 
	 
	 
 <?php } ?> 
 </div>
 </div>