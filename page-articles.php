
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

  <div class="row">
    <P>a modifier ici c'est la page article</P>
    <?php 
      while ($articles->have_posts()): // la je lance ma boucle sur mes posts contenu dans syndromes
      $articles->the_post(); // la récupère mon post
    ?>
      <div class="col-4">
        <div class="card">
          <img 
            src="<?php the_post_thumbnail_url(); ?>" 
            class="card-img-top"
            alt="<?php the_title() ?> | articles | <?php echo bloginfo('name'); ?>"
          >
          <div class="card-body">
            <h3 class="card-title"><?php the_title(); ?></h3>  <!--j'intègre mon titre de service-->
            <a href="<?php the_permalink(); ?>" class="btn btn-info">En savoir +</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

<?php else: ?>
  <h5>On a pas encore de services a vous proposer mais ça arrive !</h5>
<?php endif; ?>


            <br><br><br>
            <br><br><br>
            <br><br><br>

        
            </div>
            </div>

<?php get_footer(); ?>