<?php if ( ! defined( 'ABSPATH' ) ) { die; } 


// framework options filter example

function cristina_custom_metabox_options( $options ) {

  $options      = array(); 

 // -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'cristina_custom_page_option',
  'title'     => 'Custom Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',

  'sections'  => array(

    array(
      'name'  => 'cristina_custom_page_content',
      

      'fields' => array(

         array(
          'id'    => 'enable_title',
          'type'  => 'switcher',
          'title' => 'Enable Title?',
          'default' => false,
          'desc' => esc_html__('Enable Custom Title, Turn on switch', 'cristina-webmakerbd'),

        ),
      
        array(
          'id'    => 'custom_page_title',
          'type'  => 'text',
          'title' => 'Type Your Custom Title',          
          'desc' =>  esc_html__('Type your Custom Title : Exam: Service Content','cristina-webmakerbd'),
           'dependency'   => array( 'enable_title', '==', 'true' ),
        ),
      
        array(
          'id'    => 'overlay_perchanetage',
          'type'  => 'text',
          'title' => 'Overlay perchantage',          
          'default' => '.6',          
          'desc' =>  esc_html__('Type overlay perchantage, In floating Number like: 03, 04, 05, 06  , Maximum is 1, ','cristina-webmakerbd'),
           'dependency'   => array( 'enable_title', '==', 'true' ),
        ),
        array(
          'id'    => 'page_bradcum_overlay_color',
          'type'  => 'color_picker',
          'title' => 'Select color',
             'default' => '#1abc9c',          
          'desc' =>  esc_html__('Select Overlay color','cristina-webmakerbd'),
           'dependency'   => array( 'enable_title', '==', 'true' ),
        ),
        

       

      ), 
    ), 
  ),

);


 // -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'cristina_project_option',
  'title'     => 'Custom Project Options',
  'post_type' => 'project',
  'context'   => 'normal',
  'priority'  => 'default',

  'sections'  => array(

    array(
      'name'  => 'cristina_custom_page_content',
      

      'fields' => array(

         array(
          'id'    => 'enable_information',
          'type'  => 'switcher',
          'title' => 'Ebable Project Information',
          'default' => false,
          'desc' => esc_html__('Do you want to Ebable Project Information, Turn on switch', 'cristina-webmakerbd'),

        ),
      
        array(
          'id'    => 'client_name',
          'type'  => 'text',
          'title' => 'Client Name',          
          'default' => 'Client Name',          
          'desc' =>  esc_html__('Type Client Name','cristina-webmakerbd'),
           'dependency'   => array( 'enable_information', '==', 'true' ),
        ),
      
        array(
          'id'    => 'Date',
          'type'  => 'text',
          'title' => 'Complete Date',          
          'default' => 'May 14, 2018',          
          'desc' =>  esc_html__('Select Complete Date','cristina-webmakerbd'),
           'dependency'   => array( 'enable_information', '==', 'true' ),
        ),   
        
        array(
          'id'    => 'project_type',
          'type'  => 'text',
          'title' => 'Project Type',          
          'default' => 'Multipurpose Template',          
          'desc' =>  esc_html__('Type Project Type: Examplet Multipurpose Website Template','cristina-webmakerbd'),
           'dependency'   => array( 'enable_information', '==', 'true' ),
        ), 
        array(
          'id'    => 'live_project',
          'type'  => 'text',
          'title' => 'Live Project Link',          
          'default' => 'http://webmakerbd.net',          
          'desc' =>  esc_html__('Type Live Project Link','cristina-webmakerbd'),
           'dependency'   => array( 'enable_information', '==', 'true' ),
        ),  
        
      ), 
    ), 
  ),

);


  return $options;

}
add_filter( 'cs_metabox_options', 'cristina_custom_metabox_options' );






function cristina_framework_metabox_options( $options ) {

  $options      = array(); 

  return $options;

}
add_filter( 'cs_framework_options', 'cristina_framework_metabox_options' );


