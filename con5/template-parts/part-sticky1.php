<?php 

$sticky = get_option('sticky_posts');
if (!empty($sticky)) {
    
    rsort($sticky);
   
    $args = array(
		'posts_per_page'      => 1,
        'post__in' => $sticky
    );
    $data=query_posts($args);
	if (!empty($data)) {
	
	?>
	<div class="container">
		<div class="row">
		<?php 
		
		foreach ($data as $item) {
			?>
<div class="col">
    <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="min-height: 250px;">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0"><?=$item->post_title?></h3>
        <div class="mb-1 text-body-secondary"><?=substr($item->post_date,0,10)?></div>
        <p class="card-text mb-auto"><?php echo kama_excerpt( [ 'maxchar'=>350, 'text'=>$item->post_content] ); ?></p> 
		<a href="<?=$item->guid?>" class="icon-link gap-1 icon-link-hover stretched-link">Далее
<svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div>
<?php if (!empty(get_the_post_thumbnail_url( $item->ID ))) {?> 
      <div class="col-auto d-none d-lg-block" style="width: 40%;
    background-size: cover;background-image:url(<?php echo get_the_post_thumbnail_url( $item->ID ); ?>)">
<?php } ?>
      </div>
    </div>
  </div>

<?php			
			 
		}
		?>
		</div>
	</div>
		<?php 
	}
}
wp_reset_postdata();

?>





  
 
