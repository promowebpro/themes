<?php 

//echo "<pre>";print_r($args);echo"</pre>";
?>
<div class="col">
  <div class="card shadow-sm">
    <div  style="width: 100%; height:200px;
    background-size: cover; background-position:center center; background-image:url(<?php echo get_the_post_thumbnail_url( $args->ID ); ?>)">
      
    </div>
    <div class="card-body">
	  <p><a href="<?=$args->guid?>" class="icon-link gap-1 icon-link-hover stretched-link"><?=$args->post_title?>
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a></p>
      <p class="card-text"><?php //the_excerpt() ?></p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          
          
        </div> </div>
    </div>
  </div>
</div>