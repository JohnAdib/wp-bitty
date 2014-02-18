<?php 
// Get slide items

function get_slide_items($slide_cat, $count){
	global $post;
	 $args = array(
        'posts_per_page' => $count,  // Limit to 5 posts
        'cat' => $slide_cat,
    );

	$loop = new WP_Query( $args );
	echo "<ul class='slides'>";
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<li>
		
		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 960, 410, true,true,true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			<a href="<?php the_permalink();?>">  <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
		<?php endif; ?>
		<div class="flex-caption">
					<h2><a href="<?php the_permalink();?>">  <?php the_title(); ?> </a></h2>
			  	  	<span> <?php echo excerpt(25); ?> </span>
  	  	</div>
  	</li>

    <?php endwhile;
    echo "</ul>";
    wp_reset_postdata();
}