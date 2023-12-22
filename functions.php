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



// page rdv
function mon_code_shortcode() {
  ob_start();
  ?>
 <div class="datetimepicker">
 <input type="date" id="date" value="2023-12-22">
 <span></span>
 <input type="time" id="time" value="08:00">
 </div>
 <?php
  return ob_get_clean();
 }
 add_shortcode('mon_code', 'mon_code_shortcode');




/* card mission */
register_post_type('mission'/* le nom de mon type de contenu */, [ // tableau avec mes options 
  'labels' => [ // ça sera le nom afficher dans mon menu word press avec la traduction
    'name' => __('mission'), // __() permet a wordpress que c'est contenu de traduction
    'singular_name' => __('mission')
  ],
  'supports' => ['title', 'editor', 'thumbnail'], // on precise que notre post_type support title(un titre), editor(l'éditeur de contenu) et thumbnail(une photo a la une)
  'public' => true, // c'est un post_type publique
  'show_in_rest' => true,
  'has_archive' => false, // en cas de suppression on peut retrouver notre post disparu
  'rewrite' => ['slug' => 'mission'], // j'applique une réécriture d'url "services" au lieu de "slug"
  'menu_icon' => 'dashicons-clipboard' // je lui précise une icon dans la bar d'outil de l'admin wordpress
]);


/* actus post */
register_post_type('actus'/* le nom de mon type de contenu */, [ // tableau avec mes options 
  'labels' => [ // ça sera le nom afficher dans mon menu word press avec la traduction
    'name' => __('actus'), // __() permet a wordpress que c'est contenu de traduction
    'singular_name' => __('actus')
  ],
  'supports' => ['title', 'editor', 'thumbnail'], // on precise que notre post_type support title(un titre), editor(l'éditeur de contenu) et thumbnail(une photo a la une)
  'public' => true, // c'est un post_type publique
  'show_in_rest' => true,
  'has_archive' => false, // en cas de suppression on peut retrouver notre post disparu
  'rewrite' => ['slug' => 'actus'], // j'applique une réécriture d'url "services" au lieu de "slug"
  'menu_icon' => 'dashicons-clipboard' // je lui précise une icon dans la bar d'outil de l'admin wordpress
]);




/*  rediriger apres Connexion */

function redirect_after_login($redirect_to, $user) {
  // Vérifier si l'utilisateur est connecté
  if (is_user_logged_in()) {
      // Rediriger vers la page de profil après la connexion
      return home_url('/profil'); // Remplacez '/profil' par l'URL de votre page de profil
  }
  return $redirect_to;
}
add_filter('wpmem_login_redirect', 'redirect_after_login', 10, 2);



/*  rediriger apres Inscription */

function redirect_after_register($fields) {
  // Rediriger vers la page de profil après l'inscription
  return home_url('/profil'); // Remplacez '/profil' par l'URL de votre page de profil
}
add_filter('wpmem_register_redirect', 'redirect_after_register');







// Personnalisation du formulaire d'inscription de WP-Members
function personnaliser_formulaire_inscription_wp_members($fields) {
  // Ajoutez ici des champs personnalisés si nécessaire
  // Exemple : $fields['nouveau_champ'] = array('label' => 'Nouveau Champ', 'type' => 'text');

  return $fields;
}
add_filter('wpmem_register_form_rows', 'personnaliser_formulaire_inscription_wp_members');

// Personnalisation des messages d'erreur du formulaire d'inscription
function personnaliser_messages_erreur_wp_members($fields) {
  $fields['username']['error'] = 'Votre message d\'erreur personnalisé pour le nom d\'utilisateur';
  $fields['password']['error'] = 'Votre message d\'erreur personnalisé pour le mot de passe';
  // Ajoutez ici d'autres messages d'erreur personnalisés

  return $fields;
}
add_filter('wpmem_register_errors', 'personnaliser_messages_erreur_wp_members');






// question quiz

function create_quiz_question_post_type() {
	register_post_type('quiz_question',
		array(
			'labels' => array(
				'name' => __('Quiz Questions'),
				'singular_name' => __('Quiz Question')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor')
		)
	);
  }

  add_action('init', 'create_quiz_question_post_type');














/**gerer menu */

register_nav_menu('footer','Menu du footer');
register_nav_menu('header','Menu header');
register_nav_menu('dropdown','Menu dropdown');



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


