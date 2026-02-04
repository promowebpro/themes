
<div class="container features2 my-5">

<?php if (!empty($args->title)) { ?>
	<h2 class="my-5 p-3"><?=$args->title?></h2>
<?php } ?> 
 
 <div class="d-flex justify-content-center">
 
 
 <table class="features mx-auto width-auto ">
 <?php 
 
 foreach ($args->items as $item) { ?>
	 
		<tr class="py-5 my-5">
			<td class="align-top px-5"><?=$item->icon_svg?></td>
			<td class="align-top">
			<h3 class="fs-2 text-body-emphasis my-2"><?=$item->title?></h3>
			<p><?=$item->text?></p>
			
			<?php if (!empty($item->url)) { ?>
			<a href="<?=$item->url->url?>" target="<?=$item->url->target?>" class="icon-link">
				<?=$item->url->title?>
				
			<svg class="bi" aria-hidden="true" width="50" height="50"><use xlink:href="#chevron-right"></use></svg> </a> 
			<?php } ?>
			</td>
</tr> 
	 
	 
 <?php } ?> 
 </table>
</div>
 </div>