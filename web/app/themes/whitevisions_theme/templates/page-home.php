
<?php 

global $post;

$attr = array();

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

if (empty($attachments) || !isset($attr['type'])) return '';



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

?>

<div data-zs-overlay='dots' data-zs-speed='20000' data-zs-src='[<?php echo $image_list; ?>]' id='home'></div>

