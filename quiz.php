<?php /* Template Name: Quiz Template */ ?>



<div id="quiz-container">
<a href="<?php echo esc_url(home_url('localhost/GenZen/about/')); ?>" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Logo.png" alt="Logo">
    </a>
    <?php include_once(get_template_directory() . '/quiz genzen/index.html'); ?>
</div>
<!-- Inclure le fichier CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/quiz genzen/style.css">

<!-- Inclure le fichier JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/quiz genzen/script.js"></script>



