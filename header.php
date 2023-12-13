<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GenZen</title>

              <!-- Font popin -->
               <link rel="preconnect" href="https://fonts.googleapis.com">
              <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
              <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
 
              <!-- font Cooper -->
              <!-- <link rel="stylesheet" href="https://use.typekit.net/jtd0nll.css"> -->

  <?php wp_head(); ?>
</head>
<body
<?php body_class(); ?>>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

      <a class="navbar-brand" href="#"><img id="logo" src="<?php echo get_template_directory_uri();?>/assets/img/Logo.png" alt="le logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">


        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container' => false, 
                    'menu_class' => 'navbar-nav navbar-expand-lg'  
    ])?>
                <a href="http://localhost:8888/test-wordpress/connexion/" class="login-button">
                <i class="bi bi-person-circle"></i></i>
                </a>



        </div>
      </div>
    </nav>
  </header>