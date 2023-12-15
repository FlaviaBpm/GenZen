
<?php get_header(); ?>


<?php
  $articles = new WP_Query([ // je crée une variable $syndromes
    'post_type' => 'articles', // la je précise quel post_type je veux (dans mon cas "syndromes")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 5, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($articles->have_posts()): // ici je vérifie que $syndromes posède bien mes posts
?>

  
<?php else: ?>
  <h5>On a pas encore de services a vous proposer mais ça arrive !</h5>
<?php endif; ?>


            <br><br><br>
            <br><br><br>
            <br><br><br>

        
            </div>
            </div>

<?php get_footer(); ?>