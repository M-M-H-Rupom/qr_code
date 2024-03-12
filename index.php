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
}
 add_filter( "the_content", "pqrc_display_qr_code");
?>
