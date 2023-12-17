<?php

add_theme_support('title-tag'); // support de mon title tag
add_theme_support('menus'); // support de mon title tag

add_theme_support('post-thumbnails'); // support des images a la une

// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style-page', get_template_directory_uri() . '/page.css');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', false, 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts'); // function qui va nous permettre de charger des function (perso ou autre a la chaine)

/*syndromes poste*/
function create_post_type() {	 // function dans la quel j'ajouterais tous mes type de contenu
	register_post_type('syndromes'/* le nom de mon type de contenu */, [ // tableau avec mes options 
		'labels' => [ // ça sera le nom afficher dans mon menu word press avec la traduction
			'name' => __('Syndromes'), // __() permet a wordpress que c'est contenu de traduction
			'singular_name' => __('Syndromes')
		],
    'supports' => ['title', 'editor', 'thumbnail'], // on precise que notre post_type support title(un titre), editor(l'éditeur de contenu) et thumbnail(une photo a la une)
		'public' => true, // c'est un post_type publique
    'show_in_rest' => true,
		'has_archive' => false, // en cas de suppression on peut retrouver notre post disparu
  	'rewrite' => ['slug' => 'syndromes'], // j'applique une réécriture d'url "services" au lieu de "slug"
		'menu_icon' => 'dashicons-clipboard' // je lui précise une icon dans la bar d'outil de l'admin wordpress
	]);
}
add_action('init', 'create_post_type');


/* articles poste*/
register_post_type('Articles'/* le nom de mon type de contenu */, [ // tableau avec mes options 
  'labels' => [ // ça sera le nom afficher dans mon menu word press avec la traduction
    'name' => __('Articles'), // __() permet a wordpress que c'est contenu de traduction
    'singular_name' => __('Articles')
  ],
  'supports' => ['title', 'editor', 'thumbnail'], // on precise que notre post_type support title(un titre), editor(l'éditeur de contenu) et thumbnail(une photo a la une)
  'public' => true, // c'est un post_type publique
  'show_in_rest' => true,
  'has_archive' => false, // en cas de suppression on peut retrouver notre post disparu
  'rewrite' => ['slug' => 'Articles'], // j'applique une réécriture d'url "services" au lieu de "slug"
  'menu_icon' => 'dashicons-clipboard' // je lui précise une icon dans la bar d'outil de l'admin wordpress
]);


/* Connexion */





/* Inscription */



/**gerer menu */

register_nav_menu('footer','Menu du footer');
register_nav_menu('header','Menu header');


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

?>


