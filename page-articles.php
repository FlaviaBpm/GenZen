
<?php get_header(); ?>

<div class="bg-synd">
<div class="container-synd">

            <div class="text-synd">
                <h1>Actualités sur la Santé </h1>
                <br>

<h7>Explorez notre section dédiée au bien-être, couvrant des conseils essentiels pour naviguer à travers les transitions de la vie. Nourrissez votre esprit et votre corps avec des informations précieuses pour une vie épanouissante pendant cette période cruciale.
</h7>
  <br><br><br>
  </div>

  <?php 
                get_header(); 
                if (have_posts()):
                while (have_posts()): the_post();
              ?>
                <div class="container-mission">
    <article><?php the_content(); ?></article>
  </div>
  <?php endwhile; else: ?>

Pas d'article de mission
<?php 
endif;
get_footer(); 
?>

           
            <br><br><br>
            <br><br><br>

        

<?php get_footer(); ?>