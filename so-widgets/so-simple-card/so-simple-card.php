<?php
/*
Widget Name: ADF Simple Card Widget
Description: Simple card widget with title and description
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class SP_SIMPLE_CARD extends SiteOrigin_Widget{
  function __construct(){
    $form_options = array(
      'simple_card_repeater' => array(
        'type'      => 'repeater',
        'label'     => 'Card Repeater',
        'item_name' =>  __( 'Add Card', 'siteorigin-widgets' ),
        'fields'    =>  array(
          'card_title'  =>  array(
            'type'  =>  'text',
            'label' =>  __( 'Title', 'siteorigin-widgets' ),
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
        )
      ),
    );
    parent::__construct(
      'so-simple-card',
      __('ADF Simple Card','siteorigin-widgets'),
      array(
        'description' =>  __('Sample card widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-simple-card'
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
siteorigin_widget_register('so-simple-card',__FILE__,'SP_SIMPLE_CARD');

  ?>
