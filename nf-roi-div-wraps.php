<?php
/*
Plugin Name: Ninja Forms ROI Calculator Fields Wrap
Plugin URI: http://wpninjas.com
Description: This plugin allows you to wrap fields in divs based on names below
Version: 1.0
Author: WPN Zach
Author URI: http://zachskaggs.com
*/
function roi_calc_group_open_wrap( $field_id, $data ) {
  if( $data['class'] == 'data-open' ) {
    echo '<div class="data-fields-group">';
  }
  if( $data['class'] == 'roi-open' ) {
    echo '<div class="roi-fields-group">';
  }
  if( $data['class'] == 'manual-open' ) {
    echo '<div class="manual-fields-group">';
  }
  if( $data['class'] == 'savings-open' ) {
    echo '<div class="savings-fields-group">';
  }
}
add_action ( 'ninja_forms_display_before_field', 'roi_calc_group_open_wrap', 1, 2 );
 
function roi_calc_group_close_wrap( $field_id, $data ) {
  if( $data['class'] == 'data-close' ) {
    echo '</div>';
  }
  if( $data['class'] == 'roi-close' ) {
    echo '</div>';
  }
  if( $data['class'] == 'manual-close' ) {
    echo '</div>';
  }
  if( $data['class'] == 'savings-close' ) {
    echo '</div>';
  }
}
add_action ( 'ninja_forms_display_after_field', 'roi_calc_group_close_wrap', 1, 2 );

function ninja_forms_display_roi_css(){
  wp_enqueue_style( 'ninja-forms-roi-display', getcwd() .'/css/ninja-forms-roi-display.css' );
  }
add_action( 'ninja_forms_display_css', 'ninja_forms_display_roi_css', 10, 2 );