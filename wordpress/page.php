<?php

/**
 *
 * @package fffsigwptheme
 */

get_header(); ?>

<main>
    <!-- opener Image -->
    <section class="py-5 text-center container-fluid fff-opener text-white">
        <h1 class="my-5 fff-opener-title fw-bold text-break"><?php the_title() ?></h1>
    </section>
    <section id="content" class="container-sm">
        <?php the_content() ?>
    </section>

</main>

<?php get_footer(); ?>