<?php get_header(); ?>

<section>

    <!-- Page d'accueil -->
    <div class="accueil-fond">
        <div class="container col-8">
            <div class="row">

                <div class="col-lg-6 order-last"> <!-- Utilisez col-lg-6 pour donner plus d'espace sur des écrans plus larges -->
                    <div class="image-acceuil">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="image fond d'accueil" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 order-first"> <!-- Utilisez col-lg-6 pour donner plus d'espace sur des écrans plus larges -->
                    <div class="card-accueil">
                        <div class="card-body-1">
                            <h1 class="card-title">Cultivez votre sérénité mentale</h1>
                            <br>
                            <h5 class="card2-title" style="color:#F4B425"> Comme les fleurs, donnez-vous le temps de grandir et de vous épanouir</h5>
                            <br>
                            <p class="card-text"> Découvrez notre quiz santé mentale pour les jeunes ! Explorez des questions engageantes,
                                recevez des articles personnalisés et renforcez votre bien-être émotionnel. Investissez dans votre équilibre
                                mental dès aujourd'hui !
                            </p>
                            <br><br>
                            <a href="http://localhost:8888/test-wordpress/quiz/" class="btn btn-primary">Démarrer le test</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Qui sommes-nous -->
    <div class="container-who">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Who.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h1>Qui sommes-nous?</h1>
                <p class="card-text">Nous sommes deux passionnés dévoués à la cause de la santé mentale des jeunes. Forts de notre conviction commune que chaque jeune mérite de se sentir compris, soutenu et écouté, nous avons uni nos compétences pour créer « GenZen », une plateforme en ligne innovante dédiée au bien-être mental des jeunes d’aujourd’hui. « GenZen » est bien plus qu’un simple site web. C’est une ressource dynamique conçue pour aider les jeunes à naviguer dans les complexités de leur santé mentale.</p>
                <a href="#" class="btn btn-secondary">En savoir +</a>
            </div>
        </div>
    </div>

    <!-- Missions -->
    <?php
    $mission = new WP_Query([
        'post_type' => 'mission',
        'post_status' => 'publish',
        'limit' => 5,
        'orderby' => 'date',
        'date' => true
    ]);

    if ($mission->have_posts()):
    ?>
    <div class="container my-5">
 <!-- Ajout d'une marge en bas -->
        <div class="row">
        <h1>Mission</h1>

            <?php
            while ($mission->have_posts()):
                $mission->the_post();
            ?>
            <div class="col-12 col-md-4 mb-4"> 
<!-- Ajout d'une marge en bas -->
                <div class="card">
                  
                    <img
                        src="<?php the_post_thumbnail_url(); ?>"
                        class="card-img-top"
                        alt="<?php the_title() ?> | mission | <?php echo bloginfo('name'); ?>"
                    >
                    <div class="card-body">
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>" class="btn btn-info">En savoir +</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php else: ?>
    <h5>On n'a pas encore de services à vous proposer, mais ça arrive !</h5>
    <?php endif; ?>
    </div>
    </div>

</section>

<?php get_footer(); ?>
