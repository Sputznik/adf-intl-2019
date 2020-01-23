<?php
/*
Widget Name: ADFi Card Widget
Description: Card widget
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class SP_CARD extends SiteOrigin_Widget{
  function __construct(){
    $form_options = array(
      'card_repeater' => array(
        'type'      => 'repeater',
        'label'     => 'Card Repeater',
        'item_name' =>  __( 'Add Card', 'siteorigin-widgets' ),
        'fields'    =>  array(
          'card_bg_img' => array(
              'type' => 'media',
              'label' => __( 'Choose Card Background Image', 'siteorigin-widgets' ),
              'choose' => __( 'Choose image', 'siteorigin-widgets' ),
              'update' => __( 'Set image', 'siteorigin-widgets' ),
              'library' => 'image',
              'fallback' => true
          ),
          'card_icon' => array(
            'type' => 'icon',
            'label' => __( 'Select an icon', 'siteorigin-widgets' ),
          ),

          'card_link'  =>  array(
            'type'      => 'link',
            'label'     => __( 'Link', 'siteorigin-widgets' ),
            'default'   => ''
          ),
          'heading_txt'  =>  array(
            'type'  =>  'text',
            'label' =>  __( 'Heading', 'siteorigin-widgets' ),
            'default' =>  '',
          ),
          'heading_color'  =>  array(
            'type'  =>  'color',
            'label' =>  __( 'Heading Color', 'siteorigin-widgets' ),
            'default' =>  '#000'
          ),
          'card_desc'     => array(
            'type'  =>  'text',
            'label' =>  __( 'Small Description', 'siteorigin-widgets' ),
            'default' => ''
          ),
          'card_border'  =>  array(
            'type'  =>  'color',
            'label' =>  __('Card Border Color','siteorigin-widgets'),
            'default' =>  '#eee'
          ),
        )
      ),
      'card_style' => array(
          'type' => 'select',
          'label' => __( 'Choose Card Style', 'siteorigin-widgets' ),
          'default' => 'card_with_border',
          'options' => array(
              'card_with_border' => __( 'Card with border and background', 'siteorigin-widgets' ),
              'card_without_border' => __( 'Card without border and background', 'siteorigin-widgets' )
          )
      ),
    );
    parent::__construct(
      'so-card',
      __('ADFi Card','siteorigin-widgets'),
      array(
        'description' =>  __('Sample card widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-card'
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
siteorigin_widget_register('so-card',__FILE__,'SP_CARD');

  ?>
