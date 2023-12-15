<?php
$formationsList = new WP_Query([
    'post_type' => 'Mission',
    'posts_per_page' => -1
]);
?>

<?php while ( $MissionList->have_posts() ) : $MissionList->the_post(); ?>
    <li>notre formation</li>
<?php endwhile; ?>