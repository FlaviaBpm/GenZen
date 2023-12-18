<?php /* Template Name: rdv Template */ ?>

<?php  ?>


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Profil</a>
  <a href="#">Resultats</a>
  <a href="#">Rendez-vous</a>
  <a href="#">Actualités</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

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

