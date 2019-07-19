<?php
/*
Widget Name: ADF Headline
Description: ADF Headline with subheading and decoration line beneath
Author: Samuel Thomas, Sputznik
Author URI: https://www.sputznik.com
Widget URI:
Video URI:
*/
class ADF_SO_HEADLINE extends SiteOrigin_Widget{
  function __construct(){

    $form_options = array(
      'heading'  =>  array(
        'type'  =>  'text',
        'label' =>  __( 'Heading', 'siteorigin-widgets'),
      ),
      'subheading'  =>  array(
        'type'  =>  'text',
        'label' =>  __( 'Sub Heading', 'siteorigin-widgets'),
      ),
      'text'  => array(
        'type'           =>  'tinymce',
        'label'          =>  __('Description Text','siteorigin-widgets'),
        'default-editor' => 'html',
      ),
      'theme'  => array(
        'type'    => 'select',
        'label'   => 'Choose Theme',
        'default' => 'light',
        'options' => array(
          'light' => __( 'Light Theme', 'siteorigin-widgets' ),
          'dark' => __( 'Dark Theme', 'siteorigin-widgets' )
        )
      )
    );

    parent::__construct(
      'adf-headline',
      __( 'ADF Headline', 'siteorigin-widgets' ),
      array(
        'description' =>  __( 'ADF Headline with subheading and decoration line beneath', 'siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/adf-headline'
    );
  }//construct function ends here

  function get_template_name($instance){
    return 'template';
  }
  function get_template_dir($instance) {
    return 'templates';
  }
  function get_style_name($instance){
    return '';
    }
}
siteorigin_widget_register( 'adf-headline', __FILE__, 'ADF_SO_HEADLINE' );
