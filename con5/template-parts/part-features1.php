<div class="container features1 my-5">

 <div class="features1_items"> 
<?php 

 $features=$args;


 ?>
<h2><?=$args->title?></h2> 
 <div class="bd-example">
<div id="carouselExampleFade" class="carousel slide carousel-fade pointer-event" data-bs-ride="carousel">
  <div class="carousel-inner">
    
    

    
    
	<?php
 $i="0";
 foreach ($args->items as $item) { 
 if ($i=="0") $active="active"; else $active="";
 ?>
	<div class="carousel-item <?=$active?>"  style="width:100%; height:400px; background-color:#e2f0f3;">
	 <div class="feature item flex mb-5"> 
		<div class="icon">
			<?=$item->icon_svg?>
		</div>
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

	 
	
</div> 
	 
	 
 <?php $i++; } ?> 
 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

 
 </div>
 </div>
 

