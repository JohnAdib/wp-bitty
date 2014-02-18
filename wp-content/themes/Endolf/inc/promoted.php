<?php 

// Get promo items

function get_promo_items($promo_cat){
	global $post;
	 $args = array(
        'posts_per_page' => 3, 
        'cat' => $promo_cat,
    );
	$i = 0;
	$loop = new WP_Query( $args );
	echo "<div class='row'>";
	while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<?php $i++; ?>

	<?php if( 1 == $i ) { ?>

		<div class="col-md-12 first-promo">

		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 960, 480, true,true,true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			<a href="<?php the_permalink() ?>"> <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
		<?php endif; ?>
		<h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
		</div>

	<?php } else { ?>

	<div class="col-xs-6 rest-promo">
		
		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 960, 640, true,true,true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			<a href="<?php the_permalink() ?>"> <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
		<?php endif; ?>
		<h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
  	</div>

	<?php } ?>

    <?php endwhile;

    echo "</div>";

    wp_reset_postdata();
}