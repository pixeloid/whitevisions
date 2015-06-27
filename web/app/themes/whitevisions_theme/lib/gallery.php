<?php 

add_action('print_media_templates', function(){

  // define your backbone template;
  // the "tmpl-" prefix is required,
  // and your input field should have a data-setting attribute
  // matching the shortcode name
  ?>
  <script type="text/html" id="tmpl-my-custom-gallery-setting">
    <label class="setting">
      <span><?php _e('Tipus'); ?></span>
      <select data-setting="type">
        <option value="carousel" selected="selected"> Carousel </option>
        <option value="separator"> Elválasztó </option>
      </select>
    </label>
  </script>

  <script>

    jQuery(document).ready(function(){

      // add your shortcode attribute and its default value to the
      // gallery settings list; $.extend should work as well...
      _.extend(wp.media.gallery.defaults, {
        type: 'carousel'
      });

      // merge default gallery settings template with yours
      wp.media.view.Settings.Gallery = wp.media.view.Settings.Gallery.extend({
        template: function(view){
          return wp.media.template('gallery-settings')(view)
               + wp.media.template('my-custom-gallery-setting')(view);
        }
      });

    });

  </script>
  <?php

});


add_filter('post_gallery', 'swiper_gallery', 10, 2);

function swiper_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => '',
        'type' => 'swiper'
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments) || !isset($attr['type'])) $attr['type'] = 'carousel';

    switch ($attr['type']) {
        case 'carousel':
                // Here's your actual output, you may customize it to your need
                $output = "<div class='swiper-container'>\n";
                $output .= "<div class='swiper-wrapper'>\n";

                // Now you loop through each attachment
                foreach ($attachments as $id => $attachment) {
                    // Fetch the thumbnail (or full image, it's up to you)
            //      $img = wp_get_attachment_image_src($id, 'medium');
            //      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
                    $img_l = wp_get_attachment_image_src($id, 'large');
                    $img_s = wp_get_attachment_image_src($id, 'medium');

                    $output .= "<div class='swiper-slide'>\n";

                    $output .= "<picture>";
                    $output .= "    <source srcset=\"{$img_l[0]}\"  media=\"(min-width: 768px)\" />";
                    $output .= "    <img srcset=\"{$img_s[0]}\" height=\"{$img_s[2]}\" alt=\"\" />\n";
                    $output .= "</picture>";

                    $output .= "</div>\n";
                }

                $output .= "</div>\n";
                $output .= "          <div class='swiper-pagination'></div>
                      <div class='swiper-button-next'></div>
                      <div class='swiper-button-prev'></div>";
                $output .= "</div>\n";

            break;

            case 'separator':
                $output = '';
                $images = array();
                foreach ($attachments as $id => $attachment) {   
                    $img = wp_get_attachment_image_src($id, 'large');                 
                    $images[] = "\"{$img[0]}\"";
                }

                $image_list = implode(',', $images);


                $output .= "<section>";
                $output .= "  <div class='separator-illustration' data-zs-overlay='dots' data-zs-speed='20000' data-zs-src='[$image_list]'>";
                $output .= "    <div class='separator-illustration__shadow'></div>";
                $output .= "  </div>";
                $output .= "</section>";

                break;
        
        default:
            # code...
            break;
    }


    return $output;
}

