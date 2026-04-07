<?php
function gomita_style(){

    wp_enqueue_style(
        'gomita_style',
        get_template_directory_uri().'/style.css',
        array(),
        '1.0.0'
    );
}

add_action( 'wp_enqueue_scripts', 'gomita_style' );

function mis_menus(){
    register_nav_menus(array(
        'menu-principal'=>__('Menu Principal', 'gomitatheme'),
        'menu-secundario'=>__('Menu Secundario', 'gomitatheme'),
        'menu-escondido'=>__('Menu Escondido', 'gomitatheme')
    ));

}
add_action('after_setup_theme', 'mis_menus');

function mis_scripts(){
    // aquí se añade jquery, que es una librería de javascript
    wp_enqueue_script('jquery');
    // aquí se añade mi script personal
    wp_enqueue_script(
        'gomita-script',
        get_template_directory_uri().'./js/script.js', array('jquery'),
        // array('jquery') es una dependencia, cosas que quiero que se carguen antes que todo, como el reset por ejemplo
        '1.0.0',
        true
    );
}
add_Action('wp_enqueue_scripts','mis_scripts');