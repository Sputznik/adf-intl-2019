<?php
/*
Widget Name: ADFi Card Widget with Button
Description: Card widget with button
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class SP_BUTTON_CARD extends SiteOrigin_Widget{
  function __construct(){
    $form_options = array(
      'card_btn_repeater' => array(
        'type'      => 'repeater',
        'label'     => 'Card Repeater',
        'item_name' =>  __( 'Add Card', 'siteorigin-widgets' ),
        'fields'    =>  array(
          'card_icon' => array(
            'type' => 'icon',
            'label' => __( 'Select an icon', 'siteorigin-widgets' ),
          ),
          'heading_txt'  =>  array(
            'type'  =>  'text',
            'label' =>  __( 'Heading', 'siteorigin-widgets' ),
            'default' =>  '',
          ),
          'card_desc'     => array(
            'type'  =>  'text',
            'label' =>  __( 'Small Description', 'siteorigin-widgets' ),
            'default' => ''
          ),
          'card_btn_txt'  =>  array(
            'type'      => 'text',
            'label'     => __( 'Button Text', 'siteorigin-widgets' ),
            'default'   => ''
          ),
          'card_link'  =>  array(
            'type'      => 'link',
            'label'     => __( 'Link', 'siteorigin-widgets' ),
            'default'   => ''
          ),
        )
      ),
      'card_height'  => array(
        'type' => 'multi-measurement',
        'label' => __( 'Card Height','siteorigin-widgets' ),
        'autofill' => true,
        'default' => '160px',
        'measurements' => array(
            'image_height' => array(
            'units' => array( 'px', '%' ),
            ),
        ),
      ),
    );
    parent::__construct(
      'so-btn-card',
      __( 'ADFi Card Widget with Button ','siteorigin-widgets'),
      array(
        'description' =>  __( 'Card Widget with Button','siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-btn-card'
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
siteorigin_widget_register('so-btn-card',__FILE__,'SP_BUTTON_CARD');

  ?>
