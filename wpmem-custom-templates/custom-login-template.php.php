<?php
// Template Name: Custom Login Page

get_header();

// Stocke le contenu généré par le formulaire de connexion dans une variable
$wpmem_form_content = do_shortcode("[wpmem_form login]");

// Vérifie si l'ID "wpmem_login" est présent dans le contenu
if (strpos($wpmem_form_content, 'id="wpmem_login"') === false) {
    // Si l'ID n'est pas trouvé, affiche la section "login_status_1"
    echo '<link href="' . get_template_directory_uri() . '/page.css" rel="stylesheet"/>';
    echo $wpmem_form_content;
    echo '<div class="login_status_1">' .
        '<i class="bi bi-person-check enlarged-icon"></i>' .
        '<br><br>' .
        'Ravi de vous retrouver parmi nous. Vous êtes déjà connecté et prêt à explorer toutes les merveilles que GenZen à offrir. Bonne découverte !' .
        '<br><br>' .
        '<a href="/test-wordpress/connexion/?a=logout" style="color: #CF1679;">Se déconnecter</a>' .
        '</div>';
}

get_footer();
?>
