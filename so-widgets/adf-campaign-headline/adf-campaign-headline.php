<?php
/*
Widget Name: ADFI Campaign Headline
Description: ADFI Campaign Headline with subheading and decoration line beneath
Author: Sputznik
Author URI: https://www.sputznik.com
Widget URI:
Video URI:
*/
class ADF_SO_CAMPAIGN_HEADLINE extends SiteOrigin_Widget{
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
      'hide_decoration' => array(
        'type'     => 'checkbox',
        'label'    => __( 'Hide Decoration Line', 'siteorigin-widgets' ),
        'default'  => false,
      ),
    );

    parent::__construct(
      'adf-campaign-headline',
      __( 'ADFI Campaign Headline', 'siteorigin-widgets' ),
      array(
        'description' =>  __( 'ADFI Campaign Headline with subheading and decoration line beneath', 'siteorigin-widgets' ),
        'help'        =>  ''
      ),
      array(),
      $form_options,
      plugin_dir_path(__FILE__).'/so-widgets/adf-campaign-headline'
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
siteorigin_widget_register( 'adf-campaign-headline', __FILE__, 'ADF_SO_CAMPAIGN_HEADLINE' );
