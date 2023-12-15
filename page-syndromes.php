<?php get_header(); ?>

<div class="bg-synd">
<div class="container-synd">

            <div class="text-synd">
                <h1>Syndromes : tout ce qui faut savoir !</h1>

                <br>

                <h7>Explorez notre section dédiée aux syndromes et maladies pour obtenir des informations essentielles sur leur compréhension 
                    et leur gestion. Nourrissez votre esprit et votre corps avec des conseils précieux, vous permettant ainsi de mieux naviguer 
                    à travers ces différentes affections pour une vie plus épanouissante.
                </h7>

                <br><br><br><br><br>

            </div>

<?php
  $syndromes = new WP_Query([ // je crée une variable $syndromes
    'post_type' => 'syndromes', // la je précise quel post_type je veux (dans mon cas "syndromes")
    'post_status' => 'publish', // la je précise que je veux des posts qui sont publié
    'limit' => 5, // dans mon cas je n'en ai besoin que de trois
    'orderby' => 'date', // je les trie par date 
    'date' => true // je récupéère ma date
  ]);

  if ($syndromes->have_posts()): // ici je vérifie que $syndromes posède bien mes posts
?>

  <div class="row">
    <?php 
      while ($syndromes->have_posts()): // la je lance ma boucle sur mes posts contenu dans syndromes
      $syndromes->the_post(); // la récupère mon post
    ?>
      <div class="col-4">
        <div class="card">
          <img 
            src="<?php the_post_thumbnail_url(); ?>" 
            class="card-img-top"
            alt="<?php the_title() ?> | syndromes | <?php echo bloginfo('name'); ?>"
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