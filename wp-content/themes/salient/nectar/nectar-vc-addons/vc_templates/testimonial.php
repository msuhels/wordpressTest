<?php 

extract(shortcode_atts(array("name" => '',"subtitle" => '', "quote" => '', 'image' => ''), $atts));

$has_bg = null;
$bg_markup = null;
$image1 = null;

if(!empty($image)){
	$image_src = wp_get_attachment_image_src($image, 'medium');
	$image = $image_src[0];
	$image1 = $image_src[0];

	$has_bg = 'has-bg';
	$bg_markup = 'style="background-image: url('.$image.');"';
}

//echo '<blockquote> <p>'.$quote.' <span class="bottom-arrow"></span></p>'. '<span>'.$name.'</span><span class="title">'.$subtitle.'</span></blockquote>';
echo '<blockquote><p class="happyClient">'.$quote.' <span class="bottom-arrow"></span></p>';
echo '<img  class="happyClientImg alam" src="'.$image1.'" /><span class="happyClientName alam">'.$name.'</span><span class="happyClientSub title alam">'.$subtitle.'</span></blockquote>';

?>