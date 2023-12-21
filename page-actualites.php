
<?php get_header(); ?>


<div class="bg-actu">
<div class="container-actu">

            <div class="text-actu">
                <h1>Actualités sur la Santé </h1>

                <br>

                <p>Explorez notre section dédiée au bien-être, couvrant des conseils essentiels pour naviguer à travers les transitions de la vie. Nourrissez votre esprit et votre corps avec des informations précieuses pour une vie épanouissante pendant cette période cruciale.
</p>

                

            </div>



            <?php 
                get_header(); 
                if (have_posts()):
                while (have_posts()): the_post();
              ?>

  <div class="container-mission">

  
    <article><?php the_content(); ?>
</div>
  </article>
  </div>

<?php endwhile; else: ?>

Pas d'article de mission


<?php 
endif;
get_footer(); 
?>


