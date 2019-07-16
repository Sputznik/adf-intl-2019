<?php
/*
Widget Name: Header with a Single Card
Description: Header with a Single Card widget
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class Sp_Header_Card extends SiteOrigin_Widget{
  function __construct(){
    $form_options = array(
      'header_image'  =>  array(
        'type'  =>  'media',
        'label' =>  __('Background Image','siteorigin-widgets'),
        'choose'  =>  __('Choose image','siteorigin-widgets'),
        'update'  =>  __('Set image','siteorigin-widgets'),
        'library' =>  'image',
        'fallback'  =>  true
      ),
      'card_txt'  =>  array(
        'type'           =>  'tinymce',
        'label'          =>  __('Card text','siteorigin-widgets'),
        'default'        =>  '',
        'rows'           =>  10,
        'default-editor' => 'html',
      ),
      'card_bgcolor'  =>  array(
        'type'  =>  'color',
        'label' =>  __('Card Background','siteorigin-widgets'),
        'default' =>  '#fff'
      ),
      'btn_text' =>  array(
        'type'  =>  'text',
        'label' =>  __('Button Text','siteorigin-widgets'),
        'default' => 'Click'
      ),
      'btn_url' =>  array(
        'type'  =>  'link',
        'label' =>  __('Button URL','siteorigin-widgets'),
        'default' => ''
      )
    );
    parent::__construct(
      'so-header-with-card',
      __('ADF Hero Image','siteorigin-widgets'),
      array(
        'description' =>  __('Sample header widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-header-with-card'
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
siteorigin_widget_register('so-header-with-card',__FILE__,'Sp_Header_Card');

  ?>
