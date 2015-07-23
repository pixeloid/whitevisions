<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'separator' ); 

?>




<div style='background-image: url(<?php echo $image[0]; ?>); display: none;' id='home'></div>

