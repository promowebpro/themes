<div class="sticky2">
<?php 
$sticky = get_option('sticky_posts');

if (!empty($sticky)) {
    
    rsort($sticky);
   
    $args = array(
		'posts_per_page'      => 3,
        'post__in' => $sticky
    );
    $data=query_posts($args);
	if (!empty($data)) {
	
	?>
	
		<?php 
		
		foreach ($data as $item) {
			
			?>
			<div  style="background-size:cover; background-image:url(<?php echo get_the_post_thumbnail_url( $item->ID ); ?>)">
			<div class="bgwhite75">
			<div class="container my-5">
		<div class="row  item">
			
			
			  <h2 class="p-2 pb-4 fw-normal text-center"><?=$item->post_title?></h2>
			 <div class="py-3"><?php echo kama_excerpt( [ 'maxchar'=>900, 'text'=>$item->post_content] ); ?></div>
			   <div class="more text-center"><a class="" href="<?=$item->guid?>">Читать далее »</a></p>
			</div>
	</div>

</div>
	</div>
<?php			
			 
		}
		?>
		
		<?php 
	}
}
wp_reset_postdata();

?>



</div>