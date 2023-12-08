<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GenZen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/page.css">
  <?php wp_head(); ?>
</head>
<body style="background :#">

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

      <a class="navbar-brand" href="#"><img id="logo" src="<?php echo get_template_directory_uri();?>/assets/img/Logo.png" alt="le logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">

<?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container' => false, 
                    'menu_class' => 'navbar-nav navbar-expand-lg '  
    ])?>
            
        </div>
      </div>
    </nav>
  </header>