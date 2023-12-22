<!DOCTYPE html>
<html lang="fr">

<div class="sticky"> Découvre ton bien-être mental avec notre quiz<a href="https://genzen.emu.isfsc.be/quiz/">ici</a>!</div>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GenZen</title>

              <!-- Font popin -->

              <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;300;400;600;550;700;800;900&display=swap');
</style>
               <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;550;700;800;900&display=swap" rel="stylesheet"> -->
 
              <!-- font Cooper -->

              <link rel="stylesheet" href="https://use.typekit.net/jtd0nll.css">
              
  <?php wp_head(); ?>
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 


</head>
<body <?php body_class(); ?>>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

      <a class="navbar-brand" href="<?= home_url() ?>"><img id="logo" src="<?php echo get_template_directory_uri();?>/assets/img/Logo.png" alt="le logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">


        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <nav class="navbar navbar-expand-lg">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => 'navbar-nav',
    ));
    ?>
    <!-- Ajouter un élément de menu avec un dropdown -->
    <div class="dropdown">
  <button class="dropbtn"><i class="bi bi-caret-down-fill"></i></button>
  <div class="dropdown-content">
    <a href="https://genzen.emu.isfsc.be/profil/">Profil</a>
    <a href="https://genzen.emu.isfsc.be/resultats/">Résultats</a>
    <a href="https://genzen.emu.isfsc.be/rdv/">Rendez-vous</a>
  </div>
</div></nav>




    <!-- <?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container' => false, 
                    'menu_class' => 'navbar-nav navbar-expand-lg'  
    ])?> -->
    


<!-- Déconnecter -->
    <!-- <?php if (is_user_logged_in()): // si je suis connecté ?>
  <a href="<?php echo wp_logout_url(); // lien généré par wordpress pour déconnexion ?>">Déconnexion</a>
<?php endif; ?> -->


        </div>
      </div>
    </nav>
  </header>

