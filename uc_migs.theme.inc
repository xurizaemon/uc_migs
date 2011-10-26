<?php

/**
 * Allow override of logo display. Eg:
 *
 *   return theme('imagecache', 'cc_logo', $filename, $alttext) ; // imagecache resize 
 * or
 *   return theme('image', $filename, $alttext, $alttext, array('height' => '24'), FALSE) ; // browser resize, permit use of remote logos
 */
function theme_uc_migs_cc_logo($vars) {
  return theme('image', $vars['filename'], $vars['alttext']) ;
}

/**
 * Allow override of payment method title.
 */
function theme_uc_migs_method_title($vars) {
  module_load_include('inc', 'uc_migs', 'uc_migs.lib');
  $cards = _uc_migs_card_types();
  $vars['title'] = '<strong>' . $vars['title'] . '</strong>';
  if (variable_get('uc_migs_method_title_icons', FALSE)) {
    foreach (variable_get('uc_migs_method_title_display_icons', array()) as $card) {
      if ($card && $cards[$card]['logo']) {
        $logos[] = theme('uc_migs_cc_logo', $cards[$card]['logo'], $cards[$card]['name']);
      }
    }
    if (!empty($logos)) {
      $vars['title'] .= '<br>' . theme('uc_migs_cc_logos', $logos);
    }
  }
  return $vars['title'];
}

function theme_uc_migs_cc_logos($vars) {
  drupal_add_css(drupal_get_path('module', 'uc_migs') . '/css/uc_migs.css');
  return implode(' ', $vars['logos']);
  // return theme('item_list', $vars['logos'], NULL, 'ul', array('class' => 'uc-migs-cc-logos'));
}