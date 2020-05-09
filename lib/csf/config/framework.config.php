<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings = array(
    'menu_title'      => 'Neuron Theme Option',
    'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
    'menu_position'   => 3,
    'menu_slug'       => 'neuron-theme-option',
    'ajax_save'       => false,
    'show_reset_all'  => false,
    'framework_title' => 'Neuron Theme Option <small>by NoruzzamanRubel</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// Start Header section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Header',
    'title'  => 'Header Top',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

        // begin: a field
  
        array(
            'id'    => 'Header_top_on_of',
            'type'  => 'switcher',
            'title' => 'Enable Or Disable Header Top',
            'desc' => 'If you want to enable header top area, Turn this on',
            'default' => true,
          ),
      ), // end: fields
 );

// End Header section for options overview  -

// Home Page section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Home',
    'title'  => 'Home Page',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

      // begin: a field

      array(
        'id'    => 'home_featured',
        'type'  => 'text',
        'title' => 'Home page Featured Heading Section',
        'default'  => 'Welcome to the Neuron Finance',
      ),
      array(
        'id'    => 'home_featured_content',
        'type'  => 'textarea',
        'title' => 'Home page Featured Content Section',
        'default'  => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      ),
      array(
        'id'    => 'home_details',
        'type'  => 'text',
        'title' => 'Home Page Details Heading Section',
        'default'  => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
      ),
      array(
        'id'        => 'home_dtails_dese',
        'type'      => 'textarea',
        'title'     => 'Home Page Details Description Section',
        'default'   => 'Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.

        Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics.',
      ),
      array(
          'id'              => 'home_details_image',
          'type'            => 'upload',
          'title'           => 'Home Details Image Upload Here',
        ),
        array(
            'id'              => 'home_service_title',
            'type'            => 'text',
            'title'           => 'Home Service Title Sections',
            'default'         => 'We Provide Huge Range of Services',
          ),
          array(
            'id'              => 'home_service_dese',
            'type'            => 'textarea',
            'title'           => 'Home Service Description Sections',
            'default'         => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
          ),

    ), // end: fields
 );

// End Home Page section for options overview  -
// ----------------------------------------


// About Us Page section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'About',
    'title'  => 'About Us Page',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

      // begin: a field

      array(
        'id'    => 'featured',
        'type'  => 'text',
        'title' => 'Featured Heading Section',
        'default'  => 'Welcome to the Neuron Finance',
      ),
      array(
        'id'    => 'featured_content',
        'type'  => 'textarea',
        'title' => 'Featured Content Section',
        'default'  => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
      ),
      array(
        'id'    => 'about_us_title',
        'type'  => 'text',
        'title' => 'About Us Heading Section',
        'default'  => 'Know More About Us',
      ),
      array(
        'id'    => 'about_us_dese',
        'type'  => 'textarea',
        'title' => 'About Us Description Section',
        'default'  => 'Intrinsicly synergize end-to-end results after robust models. Enthusiastically..........................',
      ),
      array(
          'id'              => 'faqs',
          'type'            => 'group',
          'title'           => 'FAQs Sections',
          'button_title'    => 'ADD New',
          'accordion_title' => 'ADD New FAQs',
          'fields'          => array(
              array(
                  'id'    => 'title',
                  'type'  => 'text',
                  'title' => 'FAQ Title',
              ),
              array(
                'id'    => 'content',
                'type'  => 'textarea',
                'title' => 'FAQ Content',
            ),                
          ),

        ),
    ), // end: fields
 );

// End About Us Page section for options overview  -
// ----------------------------------------


// Blog Page section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Blog',
    'title'  => 'Blog Page',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

      // begin: a field

      array(
        'id'    => 'blog_title',
        'type'  => 'text',
        'title' => 'Blog page Heading Section',
        'default'  => 'News Blog',
      ),
      array(
        'id'    => 'blog_content',
        'type'  => 'textarea',
        'title' => 'Blog page Content Section',
        'default'  => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
      ),
    ), // end: fields
 );

// Blog Page section for options overview  -


// Works Page section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Works',
    'title'  => 'Works Page',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

      // begin: a field

      array(
        'id'    => 'works_title',
        'type'  => 'text',
        'title' => 'Works page Heading Section',
        'default'  => 'Check Otut Our Latest portfolios',
      ),
      array(
        'id'    => 'works_content',
        'type'  => 'textarea',
        'title' => 'Works page Content Section',
        'default'  => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
      ),
      array(
        'id'    => 'works_ceo_quote',
        'type'  => 'text',
        'title' => 'Owner Quote Text',
        'default'  => '“Best customer support in Trendy Theme. Fast, took care of all my issues, and went the extra miles for me. The theme is very good and versatile.”',
      ),
      array(
        'id'    => 'works_ceo_name',
        'type'  => 'text',
        'title' => 'Owner Name',
        'default'  => 'Lewis Parsons',
      ),
      array(
        'id'    => 'works_ceo_link',
        'type'  => 'text',
        'title' => 'Owner Profile Url',
        'default'  => 'https://www.linkedin.com/in/noruzzamanrubel/',
      ),
      array(
        'id'    => 'works_ceo_post',
        'type'  => 'text',
        'title' => 'Owner Post',
        'default'  => 'CEO, Fintech',
      ),
    ), // end: fields
 );

// End Works Page section for options overview  -
// ----------------------------------------

// Contact Page section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Contact',
    'title'  => 'Contact Page',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

        // begin: a field
  
        array(
          'id'    => 'Contact_page_title',
          'type'  => 'text',
          'title' => 'Contact Page Heading Section',
          'default'  => 'Get In Touch With Us',
        ),
        array(
          'id'    => 'contact_page_content',
          'type'  => 'textarea',
          'title' => 'Contact Page Content Section',
          'default'  => 'Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.',
        ),
        array(
          'id'    => 'company_address_1',
          'type'  => 'text',
          'title' => 'First Company Address Section',
          'default'  => '305 Royal Track Suite 019. New York United States of America.',
        ),
        array(
          'id'        => 'company_address_2',
          'type'      => 'text',
          'title'     => 'Secend Company Address Section',
          'default'   => 'Hoffman Parkway, P.O Box 154 Mountain View. United States of America.',
        ),      
        array(
          'id'    => 'fax',
          'type'  => 'text',
          'title' => 'Company Fax Number',
          'default'  => '545 751 385',
        ),
        array(
          'id'    => 'phone',
          'type'  => 'text',
          'title' => 'Company Phone Number',
          'default'  => '0123 456 789',
        ),
        array(
          'id'    => 'email',
          'type'  => 'text',
          'title' => 'Company email',
          'default'  => 'info@trendytheme.com',
        ),
        array(
          'id'    => 'website',
          'type'  => 'text',
          'title' => 'Company website',
          'default'  => 'www.trendytheme.com',
        ),
      ), // end: fields
 );

// End Contact Page section for options overview  -


// Start Footer section for options overview  -
// ----------------------------------------
$options[] = array(
    'name'   => 'Footer',
    'title'  => 'Footer Gallery Widget and Copy Right Section',
    'icon'   => 'fa fa-home',

    // begin: fields
    'fields' => array(

        // begin: a field
  
        array(
            'id'    => 'footer_gallery',
            'type'  => 'gallery',
            'title' => 'Gallery Widget',
          ),
        array(
            'id'    => 'footer_client_gallery',
            'type'  => 'gallery',
            'title' => 'Client Gallery',
          ),
          array(
            'id'    => 'footer_copyright',
            'type'  => 'text',
            'title' => 'Copy Right',
            'default'  => 'Copyright@2020 Neuron Finance Inc. All Rights Reserved.',
          ),

      ), // end: fields
 );

// End Footer section for options overview  -


// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[] = array(
    'name'     => 'options',
    'title'    => 'Options',
    'icon'     => 'fa fa-plus-circle',
    'sections' => array(

        // -----------------------------
        // begin: text options         -
        // -----------------------------
        array(
            'name'   => 'text_options',
            'title'  => 'Text',
            'icon'   => 'fa fa-check',

            // begin: fields
            'fields' => array(

                // begin: a field
                array(
                    'id'    => 'unique_text_1',
                    'type'  => 'text',
                    'title' => 'Text Field',
                ),
                // end: a field

                array(
                    'id'    => 'unique_text_2',
                    'type'  => 'text',
                    'title' => 'Text Field with Description',
                    'desc'  => 'Lets write some description for this text field.',
                ),

                array(
                    'id'    => 'unique_text_3',
                    'type'  => 'text',
                    'title' => 'Text Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_text_4',
                    'type'    => 'text',
                    'title'   => 'Text Field with Default',
                    'default' => 'some default value bla bla bla',
                ),

                array(
                    'id'         => 'unique_text_5',
                    'type'       => 'text',
                    'title'      => 'Text Field with Placeholder',
                    'attributes' => array(
                        'placeholder' => 'do stuff...',
                    ),
                ),

                array(
                    'id'    => 'unique_text_6',
                    'type'  => 'text',
                    'title' => 'Text Field with After-text',
                    'after' => ' <i class="cs-text-muted">( this option is optional )</i>',
                ),

                array(
                    'id'     => 'unique_text_7',
                    'type'   => 'text',
                    'title'  => 'Text Field with Before-text',
                    'before' => '<i class="cs-text-muted">( important )</i> ',
                ),

                array(
                    'id'    => 'unique_text_8',
                    'type'  => 'text',
                    'title' => 'Text Field with After-block-text',
                    'after' => '<p class="cs-text-info">Information: There is some description for option.</p> ',
                ),

                array(
                    'id'         => 'unique_text_9',
                    'type'       => 'text',
                    'title'      => 'Text Field with Ready-Only',
                    'attributes' => array(
                        'readonly' => 'only-key',
                    ),
                    'default'    => 'info@domain.com',
                ),

                array(
                    'id'         => 'unique_text_10',
                    'type'       => 'text',
                    'title'      => 'Text Field with Maxlength (5)',
                    'attributes' => array(
                        'maxlength' => '5',
                    ),
                    'default'    => 'Hello',
                ),

                array(
                    'id'         => 'unique_text_11',
                    'type'       => 'text',
                    'title'      => 'Text Field with Custom Style',
                    'attributes' => array(
                        'style' => 'width: 175px; height: 40px; border-color: #93C054;',
                    ),
                    'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 175px; height: 40px; border-color: #93C054;"</strong></p>',
                ),

                array(
                    'id'         => 'unique_text_12',
                    'type'       => 'text',
                    'title'      => 'Text Field with Custom Style',
                    'attributes' => array(
                        'style' => 'width: 100%;',
                    ),
                    'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 100%;"</strong></p>',
                ),

                array(
                    'id'     => 'unique_text_13',
                    'type'   => 'text',
                    'before' => '<h4>Text Field without left title</h4>',
                    'after'  => '<p class="cs-text-muted">This Text Field do not using left title, just using before text here. also you can remove it.</h4>',
                ),

            ), // end: fields

        ), // end: text options

        // -----------------------------
        // begin: textarea options     -
        // -----------------------------
        array(
            'name'   => 'textarea_options',
            'title'  => 'Textarea',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_textarea_1',
                    'type'  => 'textarea',
                    'title' => 'Simple Textarea',
                ),

                array(
                    'id'        => 'unique_textarea_1_1',
                    'type'      => 'textarea',
                    'title'     => 'Textarea with Shortcoder',
                    'shortcode' => true,
                ),

                array(
                    'id'    => 'unique_textarea_2',
                    'type'  => 'textarea',
                    'title' => 'Textarea Field with Description',
                    'desc'  => 'Lets write some description for this textarea field.',
                ),

                array(
                    'id'    => 'unique_textarea_3',
                    'type'  => 'textarea',
                    'title' => 'Textarea Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_textarea_4',
                    'type'    => 'textarea',
                    'title'   => 'Textarea Field with Default',
                    'default' => 'some default value bla bla bla',
                ),

                array(
                    'id'         => 'unique_textarea_5',
                    'type'       => 'textarea',
                    'title'      => 'Textarea Field with Placeholder',
                    'attributes' => array(
                        'placeholder' => 'do stuff...',
                    ),
                ),

                array(
                    'id'    => 'unique_textarea_6',
                    'type'  => 'textarea',
                    'title' => 'Textarea Field with After-text',
                    'after' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
                ),

                array(
                    'id'     => 'unique_textarea_7',
                    'type'   => 'textarea',
                    'title'  => 'Textarea Field with Before-text',
                    'before' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
                ),

                array(
                    'id'         => 'unique_textarea_8',
                    'type'       => 'textarea',
                    'title'      => 'Textarea Field with Before-text',
                    'attributes' => array(
                        'rows' => 10,
                    ),
                    'after'      => '<p class="cs-text-muted">custom textarea attribute rows=10</p> ',
                ),

                array(
                    'id'     => 'unique_textarea_13',
                    'type'   => 'textarea',
                    'before' => '<h4>Textarea Field without left title</h4>',
                    'after'  => '<p class="cs-text-muted">This Textarea Field do not using left title, just using before text here. also you can remove it.</h4>',
                ),

            ),

        ), // end: textarea options

        // -----------------------------
        // begin: checkbox options     -
        // -----------------------------
        array(
            'name'   => 'checkbox_options',
            'title'  => 'Checkbox',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_checkbox_1',
                    'type'  => 'checkbox',
                    'title' => 'Checkbox',
                    'label' => 'Yes, Please.',
                ),

                array(
                    'id'      => 'unique_checkbox_2',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox with Default Value',
                    'label'   => 'Would you like something ?',
                    'default' => true,
                ),

                array(
                    'id'    => 'unique_checkbox_3',
                    'type'  => 'checkbox',
                    'title' => 'Checkbox Field with Help',
                    'label' => 'I am an checkbox',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_checkbox_4',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Options',
                    'options' => array(
                        'blue'   => 'Blue',
                        'green'  => 'Green',
                        'yellow' => 'Yellow',
                    ),
                ),

                array(
                    'id'      => 'unique_checkbox_5',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Options and Default',
                    'options' => array(
                        'bmw'      => 'BMW',
                        'mercedes' => 'Mercedes',
                        'jaguar'   => 'Jaguar',
                    ),
                    'default' => 'bmw',
                ),

                array(
                    'id'      => 'unique_checkbox_6',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Options Horizontal',
                    'class'   => 'horizontal',
                    'options' => array(
                        'blue'   => 'Blue',
                        'green'  => 'Green',
                        'yellow' => 'Yellow',
                        'red'    => 'Red',
                        'black'  => 'Black',
                    ),
                    'default' => array( 'green', 'yellow', 'red' ),
                ),

                array(
                    'id'      => 'unique_checkbox_7',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Pages',
                    'options' => 'pages',
                ),

                array(
                    'id'      => 'unique_checkbox_8',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Posts',
                    'options' => 'posts',
                ),

                array(
                    'id'      => 'unique_checkbox_9',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Categories',
                    'options' => 'categories',
                ),

                array(
                    'id'      => 'unique_checkbox_10',
                    'type'    => 'checkbox',
                    'title'   => 'Checkbox Field with Tags',
                    'options' => 'tags',
                ),

                array(
                    'id'         => 'unique_checkbox_11',
                    'type'       => 'checkbox',
                    'title'      => 'Checkbox Field with Pages',
                    'options'    => 'pages',
                    'query_args' => array(
                        'sort_order'  => 'desc',
                        'sort_column' => 'post_title',
                    ),
                    'after'      => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
                ),

                array(
                    'id'         => 'unique_checkbox_12',
                    'type'       => 'checkbox',
                    'title'      => 'Checkbox Field with CPT Posts',
                    'options'    => 'posts',
                    'query_args' => array(
                        'post_type' => 'your_post_type_name',
                    ),
                    'after'      => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
                ),

                array(
                    'id'         => 'unique_checkbox_13',
                    'type'       => 'checkbox',
                    'title'      => 'Checkbox Field with CPT Categories',
                    'options'    => 'categories',
                    'query_args' => array(
                        'type'     => 'your_post_type_name',
                        'taxonomy' => 'your_taxonomy_name',
                    ),
                    'after'      => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
                ),

                array(
                    'id'         => 'unique_checkbox_14',
                    'type'       => 'checkbox',
                    'title'      => 'Checkbox Field with CPT Tags',
                    'options'    => 'tags',
                    'query_args' => array(
                        'taxonomies' => 'your_taxonomy_name',
                        'order'      => 'asc',
                        'orderby'    => 'name',
                    ),
                    'after'      => '<div class="cs-text-muted"><strong>query_args:</strong> taxonomies=your_taxonomy_name, order=asc, orderby=name</div>',
                ),

            ),
        ), // end: checkbox options

        // -----------------------------
        // begin. radio options        -
        // -----------------------------
        array(
            'name'   => 'radio_options',
            'title'  => 'Radio',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'unique_radio_1',
                    'type'    => 'radio',
                    'title'   => 'Radio Field',
                    'options' => array(
                        'yes' => 'Yes, Please.',
                        'no'  => 'No, Thank you.',
                    ),
                ),

                array(
                    'id'      => 'unique_radio_2',
                    'type'    => 'radio',
                    'title'   => 'Radio with Default Value',
                    'options' => array(
                        'yes'     => 'Yes, Please.',
                        'no'      => 'No, Thank you.',
                        'nothing' => 'I am not sure, yet!',
                    ),
                    'default' => 'nothing',
                    'help'    => 'Reference site about Lorem Ipsum, a random Lipsum generator.',
                ),

                array(
                    'id'      => 'unique_radio_3',
                    'type'    => 'radio',
                    'title'   => 'Radio Field',
                    'class'   => 'horizontal',
                    'options' => array(
                        'yes' => 'Yes, Please.',
                        'no'  => 'No, Thank you.',
                    ),
                    'after'   => '<div class="cs-text-muted">Reference site about Lorem Ipsum, a random Lipsum generator.</div>',
                ),

                array(
                    'id'      => 'unique_radio_4',
                    'type'    => 'radio',
                    'title'   => 'Radio Field with Pages',
                    'options' => 'pages',
                ),

                array(
                    'id'      => 'unique_radio_5',
                    'type'    => 'radio',
                    'title'   => 'Radio Field with Posts',
                    'options' => 'posts',
                ),

                array(
                    'id'      => 'unique_radio_6',
                    'type'    => 'radio',
                    'title'   => 'Radio Field with Categories',
                    'options' => 'categories',
                ),

                array(
                    'id'      => 'unique_radio_7',
                    'type'    => 'radio',
                    'title'   => 'Radio Field with Tags',
                    'options' => 'tags',
                ),

                array(
                    'id'         => 'unique_radio_8',
                    'type'       => 'radio',
                    'title'      => 'Radio Field with Pages',
                    'options'    => 'pages',
                    'query_args' => array(
                        'sort_order'  => 'desc',
                        'sort_column' => 'post_title',
                    ),
                    'after'      => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
                ),

                array(
                    'id'         => 'unique_radio_9',
                    'type'       => 'radio',
                    'title'      => 'Radio Field with CPT Posts',
                    'options'    => 'posts',
                    'query_args' => array(
                        'post_type' => 'your_post_type_name',
                    ),
                    'after'      => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
                ),

                array(
                    'id'         => 'unique_radio_10',
                    'type'       => 'radio',
                    'title'      => 'Radio Field with CPT Categories',
                    'options'    => 'categories',
                    'query_args' => array(
                        'type'     => 'your_post_type_name',
                        'taxonomy' => 'your_taxonomy_name',
                    ),
                    'after'      => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
                ),

                array(
                    'id'      => 'unique_radio_11',
                    'type'    => 'radio',
                    'title'   => 'Radio Field',
                    'options' => array(
                        'yes'     => 'Yes, Please.',
                        'no'      => 'No, Thank you.',
                        'nothing' => 'Nothing.',
                    ),
                ),

            ),
        ), // end: radio options

        // -----------------------------
        // begin: select options       -
        // -----------------------------
        array(
            'name'   => 'select_options',
            'title'  => 'Select',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'unique_select_1',
                    'type'    => 'select',
                    'title'   => 'Select',
                    'options' => array(
                        'yes' => 'Yes, Please.',
                        'no'  => 'No, Thank you.',
                    ),
                ),

                array(
                    'id'             => 'unique_select_2',
                    'type'           => 'select',
                    'title'          => 'Select with First Empty Value',
                    'options'        => array(
                        'yes' => 'Yes, Please.',
                        'no'  => 'No, Thank you.',
                    ),
                    'default_option' => 'Select an option',
                    'help'           => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'             => 'unique_select_3',
                    'type'           => 'select',
                    'title'          => 'Select with Help',
                    'options'        => array(
                        'green'  => 'Green',
                        'red'    => 'Red',
                        'blue'   => 'Blue',
                        'yellow' => 'Yellow',
                        'black'  => 'Black',
                    ),
                    'default_option' => 'Select a color',
                    'info'           => 'Choose your favorite skin.',
                ),

                array(
                    'id'             => 'unique_select_4',
                    'type'           => 'select',
                    'title'          => 'Select with Default Value',
                    'options'        => array(
                        'primary'   => 'Primary Option',
                        'secondary' => 'Secondry Option',
                        'tertiary'  => 'Tertiary Option',
                    ),
                    'default'        => 'tertiary',
                    'default_option' => 'Select an option',
                ),

                array(
                    'id'         => 'unique_select_6',
                    'type'       => 'select',
                    'title'      => 'Select Field with Multi-select',
                    'options'    => array(
                        'bmw'      => 'BMW',
                        'mercedes' => 'Mercedes',
                        'jaguar'   => 'Jaguar',
                        'opel'     => 'Opel',
                        'golf'     => 'Golf',
                        'ferrari'  => 'Ferrari',
                        'subaru'   => 'Subaru',
                        'seat'     => 'Seat',
                    ),
                    'attributes' => array(
                        'multiple' => 'only-key',
                        'style'    => 'width: 150px; height: 125px;',
                    ),
                ),

                array(
                    'id'         => 'unique_select_7',
                    'type'       => 'select',
                    'title'      => 'Select Field with Multi-default',
                    'options'    => array(
                        'bmw'      => 'BMW',
                        'mercedes' => 'Mercedes',
                        'jaguar'   => 'Jaguar',
                        'opel'     => 'Opel',
                        'golf'     => 'Golf',
                        'ferrari'  => 'Ferrari',
                        'subaru'   => 'Subaru',
                        'seat'     => 'Seat',
                    ),
                    'attributes' => array(
                        'multiple' => 'only-key',
                        'style'    => 'width: 150px; height: 125px;',
                    ),
                    'default'    => array( 'bmw', 'mercedes', 'opel' ),
                    'info'       => 'Choose your favorite cars.',
                ),

                array(
                    'id'             => 'unique_select_8',
                    'type'           => 'select',
                    'title'          => 'Select with Pages',
                    'options'        => 'pages',
                    'default_option' => 'Select a page',
                ),

                array(
                    'id'             => 'unique_select_9',
                    'type'           => 'select',
                    'title'          => 'Select with Posts',
                    'options'        => 'posts',
                    'default_option' => 'Select a post',
                ),

                array(
                    'id'             => 'unique_select_10',
                    'type'           => 'select',
                    'title'          => 'Select with Categories',
                    'options'        => 'categories',
                    'default_option' => 'Select a tag',
                ),

                array(
                    'id'             => 'unique_select_10_1',
                    'type'           => 'select',
                    'title'          => 'Select with Menus',
                    'options'        => 'menus',
                    'default_option' => 'Select a menu',
                ),

                array(
                    'id'         => 'unique_select_11',
                    'type'       => 'select',
                    'title'      => 'Select with Pages with Multi-Select',
                    'options'    => 'pages',
                    'attributes' => array(
                        'multiple' => 'only-key',
                        'style'    => 'width: 150px; height: 125px;',
                    ),
                ),

                array(
                    'id'             => 'unique_select_12',
                    'type'           => 'select',
                    'title'          => 'Select with Chosen',
                    'options'        => array(
                        'bmw'      => 'BMW',
                        'mercedes' => 'Mercedes',
                        'jaguar'   => 'Jaguar',
                        'opel'     => 'Opel',
                        'golf'     => 'Golf',
                        'ferrari'  => 'Ferrari',
                        'subaru'   => 'Subaru',
                        'seat'     => 'Seat',
                    ),
                    'class'          => 'chosen',
                    'default_option' => 'Select your car',
                ),

                array(
                    'id'         => 'unique_select_13',
                    'type'       => 'select',
                    'title'      => 'Select with Chosen Multi-Select',
                    'options'    => array(
                        'bmw'      => 'BMW',
                        'mercedes' => 'Mercedes',
                        'jaguar'   => 'Jaguar',
                        'opel'     => 'Opel',
                        'golf'     => 'Golf',
                        'ferrari'  => 'Ferrari',
                        'subaru'   => 'Subaru',
                        'seat'     => 'Seat',
                    ),
                    'class'      => 'chosen',
                    'attributes' => array(
                        'data-placeholder' => 'Select your favrorite cars',
                        'multiple'         => 'only-key',
                        'style'            => 'width: 200px;',
                    ),
                ),

                array(
                    'id'             => 'unique_select_14',
                    'type'           => 'select',
                    'title'          => 'Select with Chosen with Pages',
                    'options'        => 'pages',
                    'class'          => 'chosen',
                    'default_option' => 'Select a page',
                ),

                array(
                    'id'         => 'unique_select_15',
                    'type'       => 'select',
                    'title'      => 'Select with Chosen with Posts Multi-Select',
                    'options'    => 'posts',
                    'class'      => 'chosen',
                    'attributes' => array(
                        'data-placeholder' => 'Select your favrorite posts',
                        'multiple'         => 'only-key',
                        'style'            => 'width: 200px;',
                    ),
                    'info'       => 'and much more select options for you!',
                ),

            ),
        ), // end: select options

        // -----------------------------
        // begin: switcher options     -
        // -----------------------------
        array(
            'name'   => 'switcher_options',
            'title'  => 'Switcher',
            'icon'   => 'fa fa-toggle-on',
            'fields' => array(

                array(
                    'id'    => 'unique_switcher_1',
                    'type'  => 'switcher',
                    'title' => 'Simple Switcher',
                ),

                array(
                    'id'    => 'unique_switcher_2',
                    'type'  => 'switcher',
                    'title' => 'Switcher Field with Label',
                    'label' => 'Yes, Please do it.',
                ),

                array(
                    'id'    => 'unique_switcher_3',
                    'type'  => 'switcher',
                    'title' => 'Switcher Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_switcher_4',
                    'type'    => 'switcher',
                    'title'   => 'Switcher Field with Default',
                    'default' => true,
                ),

            ),
        ), // end: switcher options

        // -----------------------------
        // begin: number options       -
        // -----------------------------
        array(
            'name'   => 'number_options',
            'title'  => 'Number',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_number_1',
                    'type'  => 'number',
                    'title' => 'Simple Number',
                ),

                array(
                    'id'    => 'unique_number_2',
                    'type'  => 'number',
                    'title' => 'Number Field with Description',
                    'desc'  => 'Lets write some description for this number field.',
                ),

                array(
                    'id'    => 'unique_number_3',
                    'type'  => 'number',
                    'title' => 'Number Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_number_4',
                    'type'    => 'number',
                    'title'   => 'Number Field with Default',
                    'default' => '10',
                ),

                array(
                    'id'         => 'unique_number_5',
                    'type'       => 'number',
                    'title'      => 'Number Field with Placeholder',
                    'attributes' => array(
                        'placeholder' => '25',
                    ),
                ),

                array(
                    'id'    => 'unique_number_6',
                    'type'  => 'number',
                    'title' => 'Number Field with After-text',
                    'after' => ' <i class="cs-text-muted">(px)</i>',
                ),

            ),
        ), // end: number options

        // -----------------------------
        // begin: icon options       -
        // -----------------------------
        array(
            'name'   => 'icon_options',
            'title'  => 'Icons',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_icon_1',
                    'type'  => 'icon',
                    'title' => 'Simple Icon',
                ),

                array(
                    'id'    => 'unique_icon_2',
                    'type'  => 'icon',
                    'title' => 'Icon Field with Description',
                    'desc'  => 'Lets write some description for this icon field.',
                ),

                array(
                    'id'    => 'unique_icon_3',
                    'type'  => 'icon',
                    'title' => 'Icon Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_icon_4',
                    'type'    => 'icon',
                    'title'   => 'Icon Field with Default',
                    'default' => 'fa fa-check',
                ),

                array(
                    'id'    => 'unique_icon_5',
                    'type'  => 'icon',
                    'title' => 'Icon Field with After-text',
                    'after' => '<p class="cs-text-muted">Lets write some description for this icon field.</i>',
                ),

            ),
        ), // end: icon options

        // -----------------------------
        // begin: group options        -
        // -----------------------------
        array(
            'name'   => 'group_options',
            'title'  => 'Group',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'              => 'unique_group_1',
                    'type'            => 'group',
                    'title'           => 'Group Field',
                    'button_title'    => 'Add New',
                    'accordion_title' => 'Add New Field',
                    'fields'          => array(

                        array(
                            'id'    => 'unique_group_1_text',
                            'type'  => 'text',
                            'title' => 'Text Field',
                        ),

                        array(
                            'id'    => 'unique_group_1_switcher',
                            'type'  => 'switcher',
                            'title' => 'Switcher Field',
                        ),

                        array(
                            'id'    => 'unique_group_1_textarea',
                            'type'  => 'textarea',
                            'title' => 'Upload Field',
                        ),

                    ),
                ),

                array(
                    'id'              => 'unique_group_2',
                    'type'            => 'group',
                    'title'           => 'Group Field with Default',
                    'button_title'    => 'Add New',
                    'accordion_title' => 'Add New Field',
                    'fields'          => array(

                        array(
                            'id'    => 'unique_group_2_text',
                            'type'  => 'text',
                            'title' => 'Text Field',
                        ),

                        array(
                            'id'    => 'unique_group_2_switcher',
                            'type'  => 'switcher',
                            'title' => 'Switcher Field',
                        ),

                        array(
                            'id'    => 'unique_group_2_textarea',
                            'type'  => 'textarea',
                            'title' => 'Upload Field',
                        ),

                    ),
                    'default'         => array(
                        array(
                            'unique_group_2_text'     => 'Some text',
                            'unique_group_2_switcher' => true,
                            'unique_group_2_textarea' => 'Some content',
                        ),
                        array(
                            'unique_group_2_text'     => 'Some text 2',
                            'unique_group_2_switcher' => true,
                            'unique_group_2_textarea' => 'Some content 2',
                        ),
                    ),
                ),

                array(
                    'id'              => 'unique_group_3',
                    'type'            => 'group',
                    'title'           => 'Group Field',
                    'info'            => 'You can use any option field on group',
                    'button_title'    => 'Add New Something',
                    'accordion_title' => 'Adding New Thing',
                    'fields'          => array(

                        array(
                            'id'    => 'unique_group_3_text',
                            'type'  => 'upload',
                            'title' => 'Text Field',
                        ),

                    ),
                ),

                array(
                    'id'              => 'unique_group_4',
                    'type'            => 'group',
                    'title'           => 'Group Field',
                    'desc'            => 'Accordion title using the ID of the field, for eg. "Text Field 2" using as accordion title here.',
                    'button_title'    => 'Add New',
                    'accordion_title' => 'unique_group_4_text_2',
                    'fields'          => array(

                        array(
                            'id'    => 'unique_group_4_text_1',
                            'type'  => 'text',
                            'title' => 'Text Field 1',
                        ),

                        array(
                            'id'    => 'unique_group_4_text_2',
                            'type'  => 'text',
                            'title' => 'Text Field 2',
                        ),

                        array(
                            'id'    => 'unique_group_4_text_3',
                            'type'  => 'text',
                            'title' => 'Text Field 3',
                        ),

                    ),
                ),

            ),
        ), // end: group options

        // -----------------------------
        // begin: upload options       -
        // -----------------------------
        array(
            'name'   => 'upload_options',
            'title'  => 'Upload',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_upload_1',
                    'type'  => 'upload',
                    'title' => 'Simple Upload',
                ),

                array(
                    'id'    => 'unique_upload_2',
                    'type'  => 'upload',
                    'title' => 'Upload Field with Description',
                    'desc'  => 'Lets write some description for this upload field.',
                ),

                array(
                    'id'    => 'unique_upload_3',
                    'type'  => 'upload',
                    'title' => 'Upload Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_upload_4',
                    'type'    => 'upload',
                    'title'   => 'Upload Field with Default',
                    'default' => 'screenshot-1.png',
                ),

                array(
                    'id'    => 'unique_upload_5',
                    'type'  => 'upload',
                    'title' => 'Upload Field with After-text',
                    'after' => '<p class="cs-text-muted">You can use default value <strong>get_template_directory_uri()</strong>."/images/screenshot-1.png"</p>',
                ),

                array(
                    'id'         => 'unique_upload_6',
                    'type'       => 'upload',
                    'title'      => 'Upload Field with Placeholder',
                    'attributes' => array(
                        'placeholder' => 'http://',
                    ),
                ),

                array(
                    'id'       => 'unique_upload_7',
                    'type'     => 'upload',
                    'title'    => 'Upload Field with Custom Title',
                    'settings' => array(
                        'button_title' => 'Upload Logo',
                        'frame_title'  => 'Choose a image',
                        'insert_title' => 'Use this image',
                    ),
                ),

                array(
                    'id'       => 'unique_upload_8',
                    'type'     => 'upload',
                    'title'    => 'Upload Field with Video',
                    'settings' => array(
                        'upload_type'  => 'video',
                        'button_title' => 'Upload Video',
                        'frame_title'  => 'Choose a Video',
                        'insert_title' => 'Use This Video',
                    ),
                ),

            ),
        ), // end: upload options

        // -----------------------------
        // begin: background options   -
        // -----------------------------
        array(
            'name'   => 'background_options',
            'title'  => 'Background',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'unique_background_1',
                    'type'  => 'background',
                    'title' => 'Background',
                ),

                array(
                    'id'    => 'unique_background_2',
                    'type'  => 'background',
                    'title' => 'Background Field with Description',
                    'desc'  => 'Lets write some description for this background field.',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_background_3',
                    'type'    => 'background',
                    'title'   => 'Background Field with Default',
                    'default' => array(
                        'image'      => 'something.png',
                        'repeat'     => 'repeat-x',
                        'position'   => 'center center',
                        'attachment' => 'fixed',
                        'color'      => '#ffbc00',
                    ),
                ),

                array(
                    'id'      => 'unique_background_4',
                    'type'    => 'background',
                    'title'   => 'Background Field with Description',
                    'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
                    'default' => array(
                        'color' => '#222',
                    ),
                ),

            ),
        ), // end: background options

        // -----------------------------
        // begin: color picker options -
        // -----------------------------
        array(
            'name'   => 'color_picker_options',
            'title'  => 'Color Picker',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'unique_color_picker_1',
                    'type'    => 'color_picker',
                    'title'   => 'Color Picker',
                    'default' => '#dd3333',
                ),

                array(
                    'id'    => 'unique_color_picker_2',
                    'type'  => 'color_picker',
                    'title' => 'Color Picker RGBA disabled',
                    'rgba'  => false,
                ),

                array(
                    'id'    => 'unique_color_picker_3',
                    'type'  => 'color_picker',
                    'title' => 'Color Picker Field with Description',
                    'desc'  => 'Lets write some description for this color picker field.',
                ),

                array(
                    'id'    => 'unique_color_picker_4',
                    'type'  => 'color_picker',
                    'title' => 'Color Picker Field with Help',
                    'help'  => 'I am a Tooltip helper. This field important for something.',
                ),

                array(
                    'id'      => 'unique_color_picker_5',
                    'type'    => 'color_picker',
                    'title'   => 'Color Picker Field with Default',
                    'default' => 'rgba(0, 0, 255, 0.25)',
                ),

                array(
                    'id'      => 'unique_color_picker_6',
                    'type'    => 'color_picker',
                    'title'   => 'Color Picker Field with Default',
                    'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
                    'default' => 'rgba(0, 255, 0, 0.75)',
                ),

            ),
        ), // end: color picker options

        // -----------------------------
        // begin: image select options -
        // -----------------------------
        array(
            'name'   => 'image_select_options',
            'title'  => 'Image Select',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'unique_image_select_1',
                    'type'    => 'image_select',
                    'title'   => 'Image Select (Checkbox)',
                    'options' => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
                        'value-4' => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
                    ),
                ),

                array(
                    'id'      => 'unique_image_select_2',
                    'type'    => 'image_select',
                    'title'   => 'Image Select (Checkbox) with Default',
                    'options' => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
                        'value-4' => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
                        'value-5' => 'http://codestarframework.com/assets/images/placeholder/150x125-555555.gif',
                    ),
                    'default' => 'value-2',
                ),

                array(
                    'id'      => 'unique_image_select_3',
                    'type'    => 'image_select',
                    'title'   => 'Image Select (Radio) with Default',
                    'options' => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/150x125-2ecc71.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/150x125-e74c3c.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/150x125-ffbc00.gif',
                        'value-4' => 'http://codestarframework.com/assets/images/placeholder/150x125-3498db.gif',
                    ),
                    'radio'   => true,
                    'default' => 'value-3',
                ),

                array(
                    'id'      => 'unique_image_select_4',
                    'type'    => 'image_select',
                    'title'   => 'Image Select (Radio) with Default',
                    'options' => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-4' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-5' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-6' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-7' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-8' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                    ),
                    'radio'   => true,
                    'default' => 'value-2',
                ),

                array(
                    'id'           => 'unique_image_select_5',
                    'type'         => 'image_select',
                    'title'        => 'Image Select with Multi Select',
                    'options'      => array(
                        'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-e74c3c.gif',
                        'value-4' => 'http://codestarframework.com/assets/images/placeholder/80x80-ffbc00.gif',
                        'value-5' => 'http://codestarframework.com/assets/images/placeholder/80x80-3498db.gif',
                        'value-6' => 'http://codestarframework.com/assets/images/placeholder/80x80-2ecc71.gif',
                        'value-7' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                        'value-8' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                    ),
                    'multi_select' => true,
                    'default'      => array( 'value-3', 'value-4', 'value-5', 'value-6' ),
                ),

            ),
        ), // end: image select options

        // -----------------------------
        // begin: typography options   -
        // -----------------------------
        array(
            'name'   => 'typography_options',
            'title'  => 'Typography',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'unique_typography_1',
                    'type'    => 'typography',
                    'title'   => 'Typography with Default',
                    'default' => array(
                        'family'  => 'Open Sans',
                        'font'    => 'google', // this is helper for output ( google, websafe, custom )
                        'variant' => '800',
                    ),
                ),

                array(
                    'id'      => 'unique_typography_2',
                    'type'    => 'typography',
                    'title'   => 'Typography without Chosen',
                    'default' => array(
                        'family' => 'Ubuntu',
                        'font'   => 'google',
                    ),
                    'chosen'  => false,
                ),

                array(
                    'id'      => 'unique_typography_3',
                    'type'    => 'typography',
                    'title'   => 'Typography without Chosen/Variant',
                    'default' => array(
                        'family' => 'Arial',
                        'font'   => 'websafe',
                    ),
                    'variant' => false,
                    'chosen'  => false,
                ),

            ),
        ), // end: typography options

        // -----------------------------
        // begin: new fields options   -
        // -----------------------------
        array(
            'name'   => 'wysiwyg_options',
            'title'  => 'Wysiwyg',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'wysiwyg_1',
                    'type'  => 'wysiwyg',
                    'title' => 'Wysiwyg',
                ),

                array(
                    'id'       => 'wysiwyg_2',
                    'type'     => 'wysiwyg',
                    'title'    => 'Wysiwyg with Custom Settings',
                    'settings' => array(
                        'textarea_rows' => 5,
                        'tinymce'       => false,
                        'media_buttons' => false,
                    ),
                ),

            ),
        ), // end: new fields options

        // -----------------------------
        // begin: image options        -
        // -----------------------------
        array(
            'name'   => 'image_options',
            'title'  => 'Image',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'image_1',
                    'type'  => 'image',
                    'title' => 'Image',
                ),

                array(
                    'id'    => 'image_2',
                    'type'  => 'image',
                    'title' => 'Image with After Text',
                    'desc'  => 'Lets write some description for this image field.',
                    'help'  => 'This option field is useful. You will love it!',
                ),

                array(
                    'id'        => 'image_3',
                    'type'      => 'image',
                    'title'     => 'Image with Custom Title',
                    'add_title' => 'Add Logo',
                ),

            ),
        ), // end: image options

        // -----------------------------
        // begin: gallery options      -
        // -----------------------------
        array(
            'name'   => 'gallery_options',
            'title'  => 'Gallery',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'    => 'gallery_1',
                    'type'  => 'gallery',
                    'title' => 'Gallery',
                ),

                array(
                    'id'          => 'gallery_2',
                    'type'        => 'gallery',
                    'title'       => 'Gallery with Custom Title',
                    'add_title'   => 'Add Images',
                    'edit_title'  => 'Edit Images',
                    'clear_title' => 'Remove Images',
                ),

                array(
                    'id'          => 'gallery_3',
                    'type'        => 'gallery',
                    'title'       => 'Gallery with Custom Title',
                    'desc'        => 'Lets write some description for this image field.',
                    'help'        => 'This option field is useful. You will love it!',
                    'add_title'   => 'Add Image(s)',
                    'edit_title'  => 'Edit Image(s)',
                    'clear_title' => 'Clear Image(s)',
                ),

            ),
        ), // end: gallery options

        // -----------------------------
        // begin: sorter options       -
        // -----------------------------
        array(
            'name'   => 'sorter_options',
            'title'  => 'Sorter',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'      => 'sorter_1',
                    'type'    => 'sorter',
                    'title'   => 'Sorter',
                    'default' => array(
                        'enabled'  => array(
                            'bmw'        => 'BMW',
                            'mercedes'   => 'Mercedes',
                            'volkswagen' => 'Volkswagen',
                        ),
                        'disabled' => array(
                            'ferrari' => 'Ferrari',
                            'mustang' => 'Mustang',
                        ),
                    ),
                ),

                array(
                    'id'             => 'sorter_2',
                    'type'           => 'sorter',
                    'title'          => 'Sorter',
                    'default'        => array(
                        'enabled'  => array(
                            'blue'   => 'Blue',
                            'green'  => 'Green',
                            'red'    => 'Red',
                            'yellow' => 'Yellow',
                            'orange' => 'Orange',
                            'ocean'  => 'Ocean',
                        ),
                        'disabled' => array(
                            'black' => 'Black',
                            'white' => 'White',
                        ),
                    ),
                    'enabled_title'  => 'Active Colors',
                    'disabled_title' => 'Deactive Colors',
                ),
            ),

        ), // end: sorter options

        // -----------------------------
        // begin: sorter options       -
        // -----------------------------
        array(
            'name'   => 'fieldset_options',
            'title'  => 'Fieldset',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'id'     => 'fieldset_1',
                    'type'   => 'fieldset',
                    'title'  => 'Fieldset Field',
                    'fields' => array(

                        array(
                            'id'    => 'fieldset_1_text',
                            'type'  => 'text',
                            'title' => 'Text Field',
                        ),

                        array(
                            'id'    => 'fieldset_1_upload',
                            'type'  => 'upload',
                            'title' => 'Upload Field',
                        ),

                        array(
                            'id'    => 'fieldset_1_textarea',
                            'type'  => 'textarea',
                            'title' => 'Textarea Field',
                        ),

                    ),
                ),

                array(
                    'id'      => 'fieldset_2',
                    'type'    => 'fieldset',
                    'title'   => 'Fieldset Field with Default',
                    'fields'  => array(

                        array(
                            'type'    => 'subheading',
                            'content' => 'Title of Fieldset',
                        ),

                        array(
                            'id'    => 'fieldset_2_text',
                            'type'  => 'text',
                            'title' => 'Text Field',
                        ),

                        array(
                            'id'    => 'fieldset_2_checkbox',
                            'type'  => 'checkbox',
                            'title' => 'Checkbox Field',
                            'label' => 'Are you sure?',
                        ),

                        array(
                            'id'    => 'fieldset_2_textarea',
                            'type'  => 'textarea',
                            'title' => 'Upload Field',
                        ),

                    ),
                    'default' => array(
                        'fieldset_2_text'     => 'Hello',
                        'fieldset_2_checkbox' => true,
                        'fieldset_2_textarea' => 'Do stuff',
                    ),
                ),

            ),
        ), // end: sorter options

        // -----------------------------
        // begin: others options       -
        // -----------------------------
        array(
            'name'   => 'others_options',
            'title'  => 'Others',
            'icon'   => 'fa fa-check',
            'fields' => array(

                array(
                    'type'    => 'heading',
                    'content' => 'Heading',
                ),

                array(
                    'id'    => 'unique_others_text_1',
                    'type'  => 'text',
                    'title' => 'Others Text Field 1',
                ),

                array(
                    'id'    => 'unique_others_text_2',
                    'type'  => 'text',
                    'title' => 'Others Text Field 2',
                ),

                array(
                    'type'    => 'subheading',
                    'content' => 'Sub Heading',
                ),

                array(
                    'id'    => 'unique_others_text_3',
                    'type'  => 'text',
                    'title' => 'Others Text Field 3',
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'success',
                    'content' => 'Notice Success: Lorem Ipsum, a random Lipsum generator.',
                ),

                array(
                    'id'    => 'unique_others_text_4',
                    'type'  => 'text',
                    'title' => 'Others Text Field 4',
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'info',
                    'content' => 'Notice Info: Lorem Ipsum, a random Lipsum generator.',
                ),

                array(
                    'id'    => 'unique_others_text_5',
                    'type'  => 'text',
                    'title' => 'Others Text Field 5',
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'warning',
                    'content' => 'Notice Warning: Lorem Ipsum, a random Lipsum generator.',
                ),

                array(
                    'id'    => 'unique_others_text_6',
                    'type'  => 'text',
                    'title' => 'Others Text Field 6',
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'danger',
                    'content' => 'Notice Danger: Lorem Ipsum, a random Lipsum generator.',
                ),

                array(
                    'id'    => 'unique_others_text_7',
                    'type'  => 'text',
                    'title' => 'Others Text Field 7',
                ),

                array(
                    'id'    => 'unique_others_text_8',
                    'type'  => 'text',
                    'title' => 'Others Text Field 8',
                ),

                array(
                    'type'    => 'content',
                    'content' => 'Content Field: It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                ),

                array(
                    'id'    => 'unique_others_text_9',
                    'type'  => 'text',
                    'title' => 'Others Text Field 9',
                    'after' => '<p class="cs-text-warning">This field using debug=true</p>',
                    'debug' => true,
                ),

            ),
        ), // end: other options

    ),
);

CSFramework::instance( $settings, $options );
