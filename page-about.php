<?php get_header(); ?>

    <section>
          <form>

              <!--Page d'accueil-->
              <div class="accueil-fond">
                <div class="container col-9">
                    <div class="row">

                      <div class="col order-last">
                        
                        <div class="image-acceuil">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="image fond d'accueil">
                        </div>

                      </div>

                      <div class="col order-first">

                        <div class="card-accueil">
                            <div class="card-body-1">
                              <h1 class="card-title">Cultivez votre sérénité mental</h1>
                              <br>
                              <h5 class="card2-title" style="color:#F4B425"> Comme les fleurs, donnez-vous le temps de  grandir et de vous épanouir</h5>
                              <br>
                              <h7 class="card-text"> Découvrez notre quiz santé mentale pour les jeunes ! Explorez des questions engageantes, 
                                recevez des articles personnalisés et renforcez votre bien-être émotionnel. Investissez dans votre équilibre 
                                mental dès aujourd'hui !
                              </h7>
                              <br><br>
                              <a href="#" class="btn btn-primary">Démarrer le test</a>
                            </div>
                          </div>
                          
                        </div>

                    </div>
                  </div>
              </div>

                  
              <!--Mission & Qui sommes-nous -->
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




