<?php

/**
 * The footer for our theme.
 *
 * @package fffsigwptheme
 *
 */
?>

<footer class="d-flex flex-wrap justify-content-around align-items-center py-3 mt-3 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md my-3">
                <?php if (function_exists(footer_menu())) footer_menu(); ?>
            </div>
            <div class="col-md my-3">
                <span class="text-light">&copy; <?php echo date('Y') ?> <?php bloginfo('name') ?> </span>
            </div>
            <div class="col-md my-3">

                <?php
                if (!empty(get_theme_mod('discord_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('discord_textbox', '') . '" class="mx-1"><i class="bi bi-discord text-light"></i></a>';
                }
                if (!empty(get_theme_mod('whatsapp_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('whatsapp_textbox', '') . '" class="mx-1"><i class="bi bi-whatsapp text-light"></i></a>';
                }
                if (!empty(get_theme_mod('instagram_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('instagram_textbox', '') . '" class="mx-1"><i class="bi bi-instagram text-light"></i></a>';
                }
                if (!empty(get_theme_mod('twitter_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('twitter_textbox', '') . '" class="mx-1"><i class="bi bi-twitter text-light"></i></a>';
                }
                if (!empty(get_theme_mod('youtube_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('youtube_textbox', '') . '" class="mx-1"><i class="bi bi-youtube text-light"></i></a>';
                }
                if (!empty(get_theme_mod('facebook_textbox', ''))) {
                    echo '<a href="' . get_theme_mod('facebook_textbox', '') . '" class="mx-1"><i class="bi bi-facebook text-light"></i></a>';
                }
                if (!empty(get_theme_mod('email_textbox', ''))) {
                    echo '<a href="mailto:' . get_theme_mod('email_textbox', '') . '" class="mx-1"><i class="bi bi-envelope text-light"></i></a>';
                }
                echo '<a href="https://github.com/janlout/fffsig-wp-theme" class="mx-1"><i class="bi bi-github text-light"></i></a>';
                ?>

            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>

<!-- Bootstrap JS & our JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>