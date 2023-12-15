<!-- <?php /* Template Name: Quiz Template */ ?>

<!DOCTYPE html>
<html>
<head> 
    <title> Quiz GenZen</title>
    <div id="quiz-container">
<a href="<?php echo esc_url(home_url('localhost/GenZen/about/')); ?>" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Logo.png" alt="Logo">
    </a>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>\quiz.css">

    <lik href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head> 
<body>
  <div class="welcome-screen">
    <h1>Bienvenue au quiz de GenZen</h1>
    <h3>Evaluez votre état de santé mentale avec notre quiz crée par et pour les jeunes ! </h3>
    <button id="start">Démarrer le test</button>
</div>

<div class="question-screen">
  <div class="app"> 
  <h2> 1. Avez-vous tendance à procrastiner ? (Tout laisser à la dernière minute)</h2>
  <div class="reponse">
  <ul>
      <li>Jamais</li>
      <li>Rarement</li>
      <li>Souvent</li>
      <li>Tout le temps</li>
  </ul>
</div>
  </div>
</div>

<div class="end-screen">
  <h1>Merci d'avoir repondu au questions pour retrouver vos resultats inscrivez vous ici!</h1>
  <p class="diag">Vos résultats suggèrent que vous souffrez <span>d'un TDA/TDAH</span></p>
  <button id="resultats">Resultats</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>  -->


<?php
/*
Template Name: Quiz Template
*/
get_header();
?>

<div id="primary" class="content-area">
	<p><?php the_field('q1'); ?></p>
   <main id="main" class="site-main" role="main">

   <div id="quiz-container">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>\quiz.css">

    <lik href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head> 
<body>
  <div class="welcome-screen">
    <h1>Bienvenue au quiz de GenZen</h1>
    <h3>Evaluez votre état de santé mentale avec notre quiz crée par et pour les jeunes ! </h3>
    <button id="start">Démarrer le test</button>
</div>

<div class="question-screen">
      <form method="post" action="">
         <?php
         // Loop to display ACF questions
         if (have_rows('questions', get_the_ID())) {
            while (have_rows('questions', get_the_ID())) {
               the_row();

               $question = get_sub_field('question');
               $options = get_sub_field('options');

               echo '<h2>' . esc_html($question) . '</h2>';

               if ($options) {
                  echo '<ul>';
                  foreach ($options as $option) {
                     echo '<li><input type="radio" name="' . esc_attr($question) . '" value="' . esc_attr($option) . '"> ' . esc_html($option) . '</li>';
                  }
                  echo '</ul>';
               }
            }
         }
         ?>

         <input type="submit" value="Submit">
      </form>
        </div>

<div class="end-screen">
  <h1>Merci d'avoir repondu au questions pour retrouver vos resultats inscrivez vous ici!</h1>
  <p class="diag">Vos résultats suggèrent que vous souffrez <span>d'un TDA/TDAH</span></p>
  <button id="resultats">Resultats</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
   </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
$q1_response = $_POST['q1']; // Récupérez la réponse à la question 1

// Associez la réponse à la maladie correspondante
if ($q1_response == 'jamais') {
   $maladie_associee = 'anxiéte';
} elseif ($q1_response == 'rarement') {
   $maladie_associee = 'anxiéte';
} elseif ($q1_response == 'souvent') {
  $maladie_associee = 'TDA/H';
} elseif ($q1_response == 'Tout le temps') {
  $maladie_associee = 'TDA/H';
} 
// ... et ainsi de suite pour les autres réponses
?>

