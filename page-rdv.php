

<?php /* Template Name: rdv Template */ ?>
<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>
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
