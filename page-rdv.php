<?php /* Template Name: rdv Template */ ?>

<?php  ?>


<?php get_header();
                if (have_posts()):
                while (have_posts()): the_post();
              ?>

  <div class="rdv">
    <article><?php the_content(); ?></article>
  </div>

<?php endwhile; else: ?>

No doctors available...

<?php 
endif;
?>
