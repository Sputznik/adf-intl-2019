<?php
/*
Widget Name: ADFi Image Grid Widget
Description: Image grid widget
Author: Stephen Anil, Sputznik
Author URI: http://www.sputznik.com
Widget URI:
Video URI:
*/
class ADF_IMAGE_GRID extends SiteOrigin_Widget{
  function __construct(){
    //add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
    $form_options = array(
      'img_grid_repeater' => array(
        'type'      => 'repeater',
        'label'     => 'Image Repeater',
        'item_name' =>  __( 'Add Image', 'siteorigin-widgets' ),
        'fields'    =>  array(
          'image' => array(
              'type' => 'media',
              'label' => __( 'Choose Image', 'siteorigin-widgets' ),
              'choose' => __( 'Choose image', 'siteorigin-widgets' ),
              'update' => __( 'Set image', 'siteorigin-widgets' ),
              'library' => 'image',
              'fallback' => true
          ),
          'image_title'  =>  array(
            'type'  =>  'text',
            'label' =>  __( 'Image Title', 'siteorigin-widgets' ),
            'default' =>  '',
            'description' =>  __( 'Shows image title on hover','siteorigin-widgets' )
          ),
        )
      ),
    );
    parent::__construct(
      'so-image-grid',
      __('ADFi Image Grid','siteorigin-widgets'),
      array(
        'description' =>  __('Image grid widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-image-grid'
    );
  }//construct function ends here
  /*
  function assets(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'imageDownload', get_stylesheet_directory_uri().'/so-widgets/so-image-grid/assets/download.js', array( 'jquery' ), time(), true );
  }
  */
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
siteorigin_widget_register('so-image-grid',__FILE__,'ADF_IMAGE_GRID');

  ?>
