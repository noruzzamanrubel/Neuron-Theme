<?php 

function neuron_customize_register( $wp_customize ) {

    //Phone number and Email Section
    $wp_customize->add_section( 'neuron_phone_number_email' , array(
        'title'      => __( 'Phone Number and Email', 'neuron' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'phone_number' , array(
        'default'   => '+880 123 456 789',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'phone_number_ctl', array(
        'label'      => __( 'Your Phone Number', 'neuron' ),
        'section'    => 'neuron_phone_number_email',
        'settings'   => 'phone_number',
        'type'       => 'number'
    ) );
    $wp_customize->add_setting( 'email_setting' , array(
        'default'   => 'noruzzamanrubel@gmail.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'email_ctl', array(
        'label'      => __( 'Your Email', 'neuron' ),
        'section'    => 'neuron_phone_number_email',
        'settings'   => 'email_setting',
        'type'       => 'email'
    ) );
     //Phone number and Email Section

    //Social media Section
    $wp_customize->add_section( 'neuron_social_media_section' , array(
        'title'      => __( 'Social Media Handle', 'neuron' ),
        'priority'   => 40,
    ) );

    $wp_customize->add_setting( 'neuron_facebook' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'neuron_facebook_ctl', array(
        'label'      => __( 'Input Your Facebook Handle', 'neuron' ),
        'section'    => 'neuron_social_media_section',
        'settings'   => 'neuron_facebook',
        'type'       => 'url'
    ) );
    $wp_customize->add_setting( 'neuron_twitter' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'neuron_twitter_ctl', array(
        'label'      => __( 'Input Your Twitter Handle', 'neuron' ),
        'section'    => 'neuron_social_media_section',
        'settings'   => 'neuron_twitter',
        'type'       => 'url'
    ) );
    $wp_customize->add_setting( 'neuron_linkedin' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'neuron_linkedin_ctl', array(
        'label'      => __( 'Input Your LinkedIn Handle', 'neuron' ),
        'section'    => 'neuron_social_media_section',
        'settings'   => 'neuron_linkedin',
        'type'       => 'url'
    ) );
     //Phone number and Email Section
 }
 add_action( 'customize_register', 'neuron_customize_register' );