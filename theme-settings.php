<?php
function mcbase_form_system_theme_settings_alter(&$form, &$form_state) {

  /**
   * Breadcrumb settings
   * Copied from Zen
   */
  $form['breadcrumb'] = array(
   '#type' => 'fieldset',
   '#title' => t('Breadcrumb'),
  );
  $form['breadcrumb']['breadcrumb_display'] = array(
   '#type' => 'select',
   '#title' => t('Display breadcrumb'),
   '#default_value' => theme_get_setting('breadcrumb_display'),
   '#options' => array(
     'yes' => t('Yes'),
     'no' => t('No'),
   ),
  );
  $form['breadcrumb']['breadcrumb_separator'] = array(
   '#type'  => 'textfield',
   '#title' => t('Breadcrumb separator'),
   '#description' => t('Text only. Dont forget to include spaces.'),
   '#default_value' => theme_get_setting('breadcrumb_separator'),
   '#size' => 8,
   '#maxlength' => 10,
  );
  $form['breadcrumb']['breadcrumb_home'] = array(
   '#type' => 'checkbox',
   '#title' => t('Show the homepage link in breadcrumbs'),
   '#default_value' => theme_get_setting('breadcrumb_home'),
  );
  $form['breadcrumb']['breadcrumb_trailing'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append a separator to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('breadcrumb_trailing'),
    '#description'   => t('Useful when the breadcrumb is placed just before the title.'),
  );
  $form['breadcrumb']['breadcrumb_title'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append the content title to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('breadcrumb_title'),
    '#description'   => t('Useful when the breadcrumb is not placed just before the title.'),
  );
  
  // Themedev grid stuff copied from Drupal 6 Clean base theme and updated using Zen coding style as above.
  
  $form['themedev'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Theme development settings'),
  );
  
  $form['themedev']['mcbase_rebuild_registry'] = array(
  '#type' => 'checkbox',
  '#title' => t('Rebuild theme registry on every page.'),
  '#default_value' => theme_get_setting('mcbase_rebuild_registry'),
  '#description'   => t('During theme development, it can be very useful to continuously <a href="!link">rebuild the theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', array('!link' => 'http://drupal.org/node/173880#theme-registry')),  
  );

  $form['themedev']['mcbase_enable_960_grid'] = array(
  '#type' => 'checkbox',
  '#title' => t('Enable 960 grid'),
  '#default_value' => theme_get_setting('mcbase_enable_960_grid'),
  '#description' => t('Enable a default grid overlay to check column and other positioning'),
  );
    
  $form['themedev']['mcbase_960gs_default_state'] = array(
  '#type' => 'radios',
  '#title' => t('960 default state'),
  '#options' => array('grid-enabled' => 'Enabled', 'grid-disabled' => 'Disabled'),
  '#default_value' => theme_get_setting('mcbase_960gs_default_state'),
  '#description' => t('Choose whether to enable or disable the grid on page load.'),
  );
}
