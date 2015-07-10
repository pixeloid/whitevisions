<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'orig' ); 

?>




<div style='background-image: url(<?php echo $image[0]; ?>);' id='home'></div>

