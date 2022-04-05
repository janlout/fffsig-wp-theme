<?php

/**
 * The header for our theme.
 *
 * @package fffsigwptheme
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?> | <?php bloginfo('name') ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;700&family=Roboto+Mono:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS & our CSS-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') . '/assets/styles/styles.css'; ?>"> <!-- theme styles -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory') . '/assets/styles/custom-styles.css'; ?>"> <!-- custom styles-->

    <style>
        .fff-opener {
            background-image: linear-gradient(rgba(29, 166, 74, 0.65), rgba(27, 115, 64, 0.75)), url("<?php bloginfo('template_directory'); ?>/assets/media/images/opener-placeholder.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white border-bottom shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php site_icon_url(); ?>" alt="" width="75px" height="75px" class="d-inline-block">
            </a>
            <a href="<?php echo home_url(); ?>" class="navbar-brand fs-3 fw-bold ms-3 me-auto d-none d-sm-inline"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <?php if (function_exists(header_menu())) header_menu(); ?>
                </ul>

            </div>
        </div>
    </nav>

    <?php
    if (!empty(get_theme_mod('announcement_text', ''))) {
        echo '
            <section id="announcement-bar" class="text-center  ' . get_theme_mod('announcement_color_dropdown', '') . ' text-white shadow">
                <div class="container-md py-3 px-2">
                    <h5 class="d-inline fw-bold">
                        Hinweis: 
                    </h5>
                    <p class="d-inline">
                        ' . get_theme_mod('announcement_text', '') . '
                    </p>
                </div>
            </section>
        ';
    }
