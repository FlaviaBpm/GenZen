<?php 
get_header(); 
if (have_posts()):
while (have_posts()): the_post();
?>

  <div class="container-article">
    <article><?php the_content(); ?></article>
  </div>

<?php endwhile; else: ?>

Pas d'article

<?php 
endif;
get_footer(); 
?>