<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'orig' ); 

?>




<div data-zs-overlay='dots' data-zs-speed='40000' data-zs-src='["<?php echo $image[0]; ?>"]' id='home'></div>

