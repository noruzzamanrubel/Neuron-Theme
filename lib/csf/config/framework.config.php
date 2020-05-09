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


CSFramework::instance( $settings, $options );
