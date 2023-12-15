<?php 
get_header(); 
if (have_posts()):
while (have_posts()): the_post();
?>

  <div class="container-synd">
    <article><?php the_content(); ?></article>
    <p>ici c'est les articles</p>
  </div>

<?php endwhile; else: ?>

Pas d'article

<?php 
endif;
get_footer(); 
?>