

<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>

<?php get_header(); ?>


<?php echo do_shortcode("[wpmem_form login]");  ?>


<div class="login_status_1">

<i class="bi bi-person-check enlarged-icon"></i>
<br><br>

Ravi de vous retrouver parmi nous. Vous êtes déjà connecté et prêt à explorer toutes 
les merveilles que GenZen à offrir. Bonne découverte ! 
<br><br>

<a href="/test-wordpress/connexion/?a=logout" style="color: #CF1679;
">Se déconnecter</a>
</div>


<?php get_footer(); ?>

