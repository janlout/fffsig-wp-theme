<?php

/**
 *
 * @package fffsigwptheme
 */

get_header(); ?>

<main>
    <article class="container my-5">
        <h1 class="my-3 fff-opener-title fw-bold text-break"><?php the_title(); ?></h1>
        <small class="text-muted">Veröffentlicht am <?php the_time('d.m.Y'); ?></small>
        <hr>
        <?php the_content(); ?>
        <hr>
        <!-- <a href="example-blog-overview.html" class="fs-5">Zurück zur Übersicht . . .</a> -->
    </article>
</main>

<?php get_footer(); ?>