<?php
/*
Widget Name: ADFi Hero Image
Description: ADFi Header background image with a some descriptive text
Author: Stephen Anil, Sputznik
Author URI: https://www.sputznik.com
Widget URI:
Video URI:
*/
class SP_HEADER_CARD extends SiteOrigin_Widget{
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
      'card'  => array(
        'type'    => 'section',
        'label'   => __( 'Descriptive Information' , 'siteorigin-widgets' ),
        'fields'  => array(
          'heading' => array(
            'type'  => 'text',
            'label' => 'Heading'
          ),
          'html'  => array(
            'type'           =>  'textarea',
            'label'          =>  __('Card Text','siteorigin-widgets'),
            //'default-editor' => 'html',
          ),
          'font_family' => array(
              'type' => 'checkbox',
              'label' => __( 'Use Roboto Condensed in the Heading font?', 'siteorigin-widgets' ),
              'default' => false
          ),
          'header_card_alignment' => array(
              'type' => 'select',
              'label' => __( 'Card Alignment', 'widget-form-fields-text-domain' ),
              'default' => 'left-align',
              'options' => array(
                  'left-align'   => __( 'Left', 'siteorigin-widgets' ),
                  'right-align'  => __( 'Right', 'siteorigin-widgets' ),
                  'center-align' => __( 'Center', 'siteorigin-widgets' ),
              )
          ),
          'bg'    =>  array(
            'type'    =>  'color',
            'label'   =>  __('Card Background','siteorigin-widgets'),
            'default' =>  '#ffffff'
          ),
          'color'    =>  array(
            'type'    =>  'color',
            'label'   =>  __('Text Color','siteorigin-widgets'),
            'default' =>  '#000000'
          ),
          'width' =>  array(
            'type'  =>  'text',
            'label' =>  __('Max Width','siteorigin-widgets'),
            'default' => '400px'
          ),
        )
      ),
      'btn' => array(
        'type'    => 'section',
        'hide'    => true,
        'label'   => __( 'Button' , 'siteorigin-widgets' ),
        'fields'  => array(
          'text' =>  array(
            'type'  =>  'text',
            'label' =>  __('Button Text','siteorigin-widgets'),
            'default' => 'Click'
          ),
          'url' =>  array(
            'type'  =>  'link',
            'label' =>  __('Button URL','siteorigin-widgets'),
            'default' => ''
          ),
        )
      ),
      // SETTINGS SECTION
      'settings' => array(
        'type' => 'section',
        'label' => __( 'Settings' , 'siteorigin-widgets' ),
        'hide' => true,
        'fields' => array(
          'desktop' => array(
            'type' => 'section',
            'label' => __( 'Desktop Styles' , 'siteorigin-widgets' ),
            'hide' => true,
            'fields' => $this->get_common_fields( 'desktop' ),
          ),
          'mobile' => array(
            'type' => 'section',
            'label' => __( 'Mobile Styles' , 'siteorigin-widgets' ),
            'hide' => true,
            'fields' => $this->get_common_fields( 'mobile' )
          ),
        )
      )
    );
    parent::__construct(
      'so-header-with-card',
      __('ADFi Hero Image','siteorigin-widgets'),
      array(
        'description' =>  __('Sample header widget','siteorigin-widgets'),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/so-header-with-card'
    );
  }//construct function ends here

  function get_common_fields( $screen ){
    $useable_units = array( 'px', 'vh' );
      return array(
        'bg_image_position'  => array(
          'type'      => 'select',
          'label'     => __( 'Position of Background Image Vertically','siteorigin-widgets' ),
          'default'   => 'center',
          'options' => array(
            'center'  => __( 'Center', 'siteorigin-widgets' ),
            'top'     => __( 'Top', 'siteorigin-widgets' ),
            'bottom'  => __( 'Bottom', 'siteorigin-widgets' )
          )
        ),
        'bg_image_height'  => array(
          'type' => 'multi-measurement',
          'label' => __( 'Background Image Height','siteorigin-widgets' ),
          'autofill' => true,
          'default' => '400px',
          'measurements' => array(
            'image_height' => array(
              'units' => $useable_units,
            ),
          ),
        ),
        'opacity'    =>  array(
          'type'    =>  'slider',
          'label'   =>  __('Card Opacity','siteorigin-widgets'),
          'default' => ( $screen == 'desktop' ) ? '10' : '9',
          'min' => 0,
          'max' => 10,
          'integer' => true
        ),
      );
  }

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
siteorigin_widget_register('so-header-with-card',__FILE__,'SP_HEADER_CARD');
