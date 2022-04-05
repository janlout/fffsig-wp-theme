<?php

/**
 *
 * @package fffsigwptheme
 */

get_header(); ?>

<main>
    <div class="fff-nav-dummy"></div>
    <section class="py-5 text-center container-fluid fff-opener text-white">
        <h1 class="my-5 fff-opener-title fw-bold text-break">Das aktuellste von uns im Blog!</h1>
    </section>
    <section id="content" class="container-sm">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="card my-3 rounded-0 border-0 bg-light shadow-sm">
                    <div class="row g-0">
                        <div class="col-lg-3">
                            <?php the_post_thumbnail('homepage-thumbnail', array('class' => 'card-img rounded-0 h-100 fff-img-no-distort')); ?>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-secondary"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <p class="card-text"><small class="text-muted">Veröffentlicht am <?php the_time('d.m.Y'); ?></small></p>
                                <?php the_shortlink('<p class="btn btn-primary text-white shadow-sm">Zum Post . . . </p>'); ?>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endwhile;
        endif;
        ?>

        <nav class="my-5">
            <ul class="pagination justify-content-center">
                <?php previous_posts_link('Zurück   '); ?>
                <p> - </p>
                <?php next_posts_link('   Nächste Seite'); ?>
            </ul>
        </nav>

    </section>
</main>

<?php get_footer(); ?>