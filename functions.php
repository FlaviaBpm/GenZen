<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('menus'); // support de mon title tag

add_theme_support('post-thumbnails'); // support des images a la une

// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-bundle', '	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', false, 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts'); // function qui va nous permettre de charger des function (perso ou autre a la chaine)

/**gerer menu */
register_nav_menu('header','A Propos',);
function monthem_menu_class($classes){
$classes[] = 'nav-item';
return $classes;
}

function monthem_menu_link_class($attrs){
  $attrs ['class'] = 'nav-link';
  return $attrs;
}

add_filter('nav_menu_css_class','monthem_menu_class');
add_filter('nav_menu_link_attributes','monthem_menu_link_class');