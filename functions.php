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
add_action('wp_enqueue_scripts','mis_scripts');

function img_destacada(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'img_destacada');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	if ( ! is_single() ) {
		$more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( ' ...', 'textdomain' )
		);
	}

	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );