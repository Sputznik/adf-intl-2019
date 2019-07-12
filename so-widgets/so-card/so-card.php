<?php
/*
Widget Name: Card Widget
Description: Card widget
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class Sp_Card extends SiteOrigin_Widget{
  function __construct(){
    $form_options = array(
      'card_repeater' => array(
        'type'      => 'repeater',
        'label'     => 'Card Repeater',
        'item_name' =>  __( 'Add Card', 'siteorigin-widgets' ),
        'fields'    =>  array(
          'card_icon' => array(
            'type' => 'icon',
            'label' => __('Select an icon', 'widget-form-fields-text-domain'),
          ),
          'heading_txt'  =>  array(
            'type'  =>  'text',
            'label' =>  __('Heading','siteorigin-widgets'),
            'default' =>  '',
          ),
          'heading_color'  =>  array(
            'type'  =>  'color',
            'label' =>  __('Heading Color','siteorigin-widgets'),
            'default' =>  '#000'
          ),
          'card_border'  =>  array(
            'type'  =>  'color',
            'label' =>  __('Card Border Color','siteorigin-widgets'),
            'default' =>  '#eee'
          )
        )
      )
    );
    parent::__construct(
      'so-card',
      __('ADF Card','siteorigin-widgets'),
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
siteorigin_widget_register('so-card',__FILE__,'Sp_Card');

  ?>
