<div class="row">
  <?php
    $contactPage = get_page_by_title( 'connexion' ); // je récupère la page contact
    echo apply_filters('the_content', $connexionPage->post_content); // j'affiche le contenu qui vient de la page contact
  ?>
</div>