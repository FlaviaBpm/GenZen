<!-- Appel de notre 'header' sur la page -->
<?php get_header(); ?>

<!--si besoin d'ajouter un article le faire directement sur wordpress-->
<ul>
  <?php while(have_posts()): the_post(); ?>
    <li>
      <?php the_title() ?> - <?php the_author(); ?>
      <a href="<?php the_permalink(); ?>">lire l'article</a>
    </li>
  <?php endwhile; ?>
</ul>


coucou

<!-- Appel de notre 'footer' sur la page -->
<?php get_footer(); ?>

