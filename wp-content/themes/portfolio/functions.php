<?php


function load_stylesheet() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all' );
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all' );
    wp_enqueue_style('custom');

    wp_register_style('favicon', get_template_directory_uri() . '/images/favicon.ico', array(), 1, 'all' );
    wp_enqueue_style('favicon');

    wp_register_style('apple-touch', get_template_directory_uri() . '/images/apple-touch-icon.png', array(), 1, 'all' );
    wp_enqueue_style('apple-touch');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');




function load_javascript() {

   wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 1, 1);
   wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery-superslide', get_template_directory_uri() . '/js/jquery.superslides.min.js', array(), 1, 1);
    wp_enqueue_script('jquery-superslide');

    wp_register_script('images-loaded', get_template_directory_uri() . '/js/images-loded.min.js', array(), 1, 1);
    wp_enqueue_script('images-loaded');

    wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.min.js', array(), 1, 1 );
    wp_enqueue_script('isotope');

    wp_register_script('baguetteBox', get_template_directory_uri() . '/js/baguetteBox.min.js', array(), 1, 1);
    wp_enqueue_script('baguetteBox');

    wp_register_script('form-validator', get_template_directory_uri() . '/js/form-validator.min.js', array(), 1, 1);
    wp_enqueue_script('form-validator');

    wp_register_script('contact-form', get_template_directory_uri() . '/js/contact-form-script.js', array(), 1, 1);
    wp_enqueue_script('contact-form');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1);
    wp_enqueue_script('custom');
}







//<script src="js/jquery-3.2.1.min.js"></script>
//<script src="js/popper.min.js"></script>
//<script src="js/bootstrap.min.js"></script>
//<!-- ALL PLUGINS -->
//<script src="js/jquery.superslides.min.js"></script>
//<script src="js/images-loded.min.js"></script>
//<script src="js/isotope.min.js"></script>
//<script src="js/baguetteBox.min.js"></script>
//<script src="js/form-validator.min.js"></script>
//<script src="js/contact-form-script.js"></script>
//<script src="js/custom.js"></script>
