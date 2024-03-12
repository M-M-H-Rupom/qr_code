<?php
/**
 * Plugin Name: QR Code
 * Author: Rupom
 * Description: Testing qr code plugin
 * Version: 1.0
 */
function pqrc_display_qr_code($content){
    $get_current_id = get_the_ID();
    $current_post_title = get_the_title($get_current_id);
    $current_post_permalink = get_the_permalink($get_current_id);
    $get_post_type = get_post_type($get_current_id);
    if('page'== $get_post_type){
        return $content;
    }
    $image_src = sprintf("https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=%s",$current_post_permalink);
    $qr_code = sprintf('<img src="%s" alt="%s">',$image_src,$current_post_title);
    $content .= $qr_code;
    return $content;
}
 add_filter( "the_content", "pqrc_display_qr_code");
?>
