<?php

//Enabling shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );
//Enabling shortcodes in widgets

//Shortcode inside custom post wordpress
function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post', 'orderby' => 'menu_order','order' => 'ASC')
        );      
         
    $list = '<ul>';
        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            $list .= '

                <li>
                    '.get_the_post_thumbnail( $idd, 'thumbnail' ).'
                    <p><a href="'.get_permalink( ).'">'.get_the_title( ).'</a></p>
                    <span>'.get_the_date( 'd M Y', $idd ).'</span>          
                </li>   

            ';        
        endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_thumb', 'post_list_shortcode'); 
//Shortcode inside custom post wordpress


//Google map shortcode

function neuron_google_map($attributes){
    $default = array(
        'place'=>'Mountain View',
        'width'=>'100%',
        'height'=>'400',
        'zoom'=>'14'
    );

    $params = shortcode_atts($default,$attributes);

    $map = <<<EOD
<div>
    <div>
        <iframe width="{$params['width']}" height="{$params['height']}"
                src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
    </div>
</div>
EOD;

    return $map;

}
add_shortcode('gmap','neuron_google_map');


//Shortcode UI

function text_domain_google_map_ui() {
    $fields = array(
        array(
            'label'=>__('Place','Text-domain'),
            'attr'=>'place',
            'type'=>'text',
            'meta'=>array(
                'placeholder'=>__('Place','Text-domain')
            )
        ),array(
            'label'=>__('Width','Text-domain'),
            'attr'=>'width',
            'type'=>'text',
        ),array(
            'label'=>__('Height','Text-domain'),
            'attr'=>'height',
            'type'=>'text',
        ),array(
            'label'=>__('Zoom','Text-domain'),
            'attr'=>'zoom',
            'type'=>'text',
        )
    );

    $settings = array(
        'label'=>__('Google Map','Text-domain'),
        'listItemImage'=>'dashicons-admin-site',
        'post_type'=>array('post','page'),
        'attrs'=>$fields
    );

    shortcode_ui_register_for_shortcode('gmap',$settings);
}

add_action( 'register_shortcode_ui', 'text_domain_google_map_ui' );
