<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// Post Metabox Options                    -
// -----------------------------------------
$options[] = array(
  'id'        => 'neuron_work_meta',
  'title'     => __( 'Neuron Meta Work Option', 'neuron' ),
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
      array(
          'name'   => 'work_meta_section_1',
          'title'  => __( 'Work Meta Information', 'neuron' ),
          'icon'   => 'fa fa-image',
          'fields' => array(
              array(
                  'id'      => 'sub_title',
                  'type'    => 'text',
                  'title'   => __( 'Write Sub Title', 'neuron' ),
                  'default' => __( 'ISO DESIGN', 'neuron' )
              ),
              array(
                  'id'      => 'link_text',
                  'type'    => 'text',
                  'title'   => __( 'Link Text', 'neuron' ),
                  'default' => __('Visit Website'),
              ),
              array(
                  'id'      => 'link',
                  'type'    => 'text',
                  'title'   => __( 'Link', 'neuron' ),
                  'default' => __('#'),
              ),
              array(
                  'id'      => 'big_preview',
                  'type'    => 'image',
                  'title'   => __( 'Big Preview Image', 'neuron' ),
                  'default' => __('Upload Big Preview Image'),
              ),
              array(
                  'id'        => 'informations',
                  'type'      => 'group',
                  'title'     => 'Work Informations',
                  'button_title'     => 'Add New',
                  'accordion_title'     => 'Add New Information',
                  'fields'    => array(
                    array(
                      'id'    => 'title',
                      'type'  => 'text',
                      'title' => 'Information Title',
                    ),
                    array(
                      'id'    => 'value',
                      'type'  => 'text',
                      'title' => 'Information Value',
                    ),
                  ),
                ),
              
          )
      ),
  )
);

CSFramework_Metabox::instance( $options );
