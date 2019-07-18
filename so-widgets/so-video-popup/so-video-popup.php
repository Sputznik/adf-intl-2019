<?php
/*
Widget Name: Video Popup Widget
Description: Multiple video popup widget
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class Sp_Video_Popup extends SiteOrigin_Widget{
  function __construct(){

    $form_options = array(
          'video_link' => array(
              'type' => 'link',
              'label' => __( 'Enter Video Url', 'siteorigin-widgets' ),
              'default' => ''
          ),
          'video_thumb' => array(
              'type' => 'media',
              'label' => __( 'Choose Video Thumbnail ', 'siteorigin-widgets' ),
              'choose' => __( 'Choose Thumbnail', 'siteorigin-widgets' ),
              'update' => __( 'Set Thumbnail', 'siteorigin-widgets' ),
              'library' => 'image',
              'fallback' => true
          ),
          'video_title' =>  array(
            'type'  =>  'text',
            'label' =>  __( 'Video Title', 'siteorigin-widgets' ),
            'default' => ''
          ),
          'video_desc'     => array(
            'type'  =>  'text',
            'label' =>  __( 'Small Description', 'siteorigin-widgets' ),
            'default' => ''
          ),
    );
    parent::__construct(
      'so-video-popup',
      __('ADF Video Popup','siteorigin-widgets'),
      array(
        'description' =>  __('Video popup widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-video-popup'
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
siteorigin_widget_register('so-video-popup',__FILE__,'Sp_Video_Popup');

  ?>
