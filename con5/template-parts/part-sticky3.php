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
	<div class="container sticky3 mb-5 ">
		<div class="d-inline-flex flex-wrap items p-5">
		<?php 
		
		foreach ($data as $item) {
			//echo "<pre>";print_r($item);echo"</pre>";
			?>
			<div class=" ">
	<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary" style="
					background-size: cover; background-position:center center; background-image:url(<?php echo get_the_post_thumbnail_url( $item->ID ); ?>)"> 
		<div class="whitebg"> 
		<?php if (!empty($item->post_title)) { ?>
			<h1 class="display-5"><?=$item->post_title?></h1>
		<?php } ?>
		
			<p class="lead my-3"><?php echo kama_excerpt( [ 'maxchar'=>350, 'text'=>$item->post_content] ); ?></p>
	
		<?php if (!empty($item->guid)) { ?>	
			<p class="lead mb-0"><a class="btn btn-secondary" href="<?=$item->guid?>">подробнее »</a></p>
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







