<?php

/**
 *
 * @package fffsigwptheme
 */

get_header(); ?>

<main>
    <section class="py-5 text-center container-fluid fff-opener text-white">
        <h1 class="my-5 fff-opener-title fw-bold"><?php bloginfo('name'); ?></h1>
        <p class="my-5 lead fs-3 fw-bold"><?php bloginfo('description'); ?></p>
    </section>
    <section id="content" class="px-5 mx-5">
        <div class="row">
            <div class="col-10">
                <div class="card bg-light mx-3 my-5 py-3 px-4 rounded-0 shadow-sm border-primary border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-secondary"><?php echo get_theme_mod('first_widget_name', ''); ?></h5>
                        <p><?php echo get_theme_mod('first_widget_text', ''); ?></p>
                        <a href="<?php echo get_theme_mod('first_widget_link', ''); ?>" class="card-link link-secondary text-decoration-none fw-bold"><?php echo get_theme_mod('first_widget_link_name', ''); ?></a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <div class="card bg-light mx-3 my-5 py-3 px-4 rounded-0 shadow-sm border-primary border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-secondary"><?php echo get_theme_mod('second_widget_name', ''); ?></h5>
                        <p><?php echo get_theme_mod('second_widget_text', ''); ?></p>
                        <a href="<?php echo get_theme_mod('second_widget_1_link', ''); ?>" class="card-link link-secondary text-decoration-none fw-bold"><?php echo get_theme_mod('second_widget_1_link_name', ''); ?></a>
                        <a href="<?php echo get_theme_mod('second_widget_2_link', ''); ?>" class="card-link link-secondary text-decoration-none fw-bold"><?php echo get_theme_mod('second_widget_2_link_name', ''); ?></a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-10">
                <div class="card bg-light mx-3 my-5 py-3 px-4 rounded-0 shadow-sm border-primary border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-secondary"><?php echo get_theme_mod('third_widget_name', ''); ?></h5>
                        <p><?php echo get_theme_mod('third_widget_text', ''); ?></p>
                        <a href="<?php echo get_theme_mod('third_widget_link', ''); ?>" class="card-link link-secondary text-decoration-none fw-bold"><?php echo get_theme_mod('third_widget_link_name', ''); ?></a>
                    </div>
                </div>
            </div>
        </div>


    </section>
</main>

<?php get_footer(); ?>