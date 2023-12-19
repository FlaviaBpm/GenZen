<?php get_header(); ?>

<div class="bg-synd">
    <div class="container-synd">

        <div class="text-synd">
            <h1>Syndromes : tout ce qui faut savoir !</h1>

            <br>

            <h7>Explorez notre section dédiée aux syndromes et maladies pour obtenir des informations essentielles sur leur compréhension et leur gestion. Nourrissez votre esprit et votre corps avec des conseils précieux, vous permettant ainsi de mieux naviguer à travers ces différentes affections pour une vie plus épanouissante.
            </h7>

            <br><br><br><br><br>

        </div>

        <?php
        $syndromes = new WP_Query([
            'post_type' => 'syndromes',
            'post_status' => 'publish',
            'limit' => 5,
            'orderby' => 'date',
            'date' => true
        ]);

        if ($syndromes->have_posts()):
            ?>

            <div class="row">
                <?php
                while ($syndromes->have_posts()):
                    $syndromes->the_post();
                    ?>
                    <div class="col-12 col-md-4 mb-4"> <!-- Ajout d'une marge en bas -->
                        <div class="card">
                            <img
                                src="<?php the_post_thumbnail_url(); ?>"
                                class="card-img-top"
                                alt="<?php the_title() ?> | syndromes | <?php echo bloginfo('name'); ?>"
                            >
                            <div class="card-body">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="btn btn-info">En savoir +</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php else: ?>
            <h5>On a pas encore de services à vous proposer, mais ça arrive !</h5>
        <?php endif; ?>



    </div>
</div>

<?php get_footer(); ?>
