<?php

function socialicons_customizer($wp_customize) {
    $wp_customize->add_section(
        'sec_socialicons',
        array(
            'title' => 'Socials',
            'description' => 'Hier können die Social-Media-Links im Footer konfiguriert werden. <br Der Link wird nur angezeigt, sobald ein Wert eingetragen wurde.',
            'priority' => 35,
        )
    );

    
    /**
     * Discord
     */
    $wp_customize->add_setting(
        'discord_textbox',
        array(
            'default' => 'https://discord.gg/FW9peWX',
        )
    );

    $wp_customize->add_control(
        'discord_textbox',
        array(
            'label' => 'Discord einladungslink',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );


    /**
     * Whatsapp
     */
    $wp_customize->add_setting(
        'whatsapp_textbox',
        array(
            'default' => 'https://chat.whatsapp.com/LsojOzYtclUE2bEumRaHLm',
        )
    );

    $wp_customize->add_control(
        'whatsapp_textbox',
        array(
            'label' => 'Whatsapp URL',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

    
    /**
     * Instagram
     */
    $wp_customize->add_setting(
        'instagram_textbox',
        array(
            'default' => 'https://www.instagram.com/fffsig/',
        )
    );

    $wp_customize->add_control(
        'instagram_textbox',
        array(
            'label' => 'Instagram URL',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

    
    /**
     * Twitter
     */
    $wp_customize->add_setting(
        'twitter_textbox',
        array(
            'default' => 'https://www.twitter.com/fffsig/',
        )
    );

    $wp_customize->add_control(
        'twitter_textbox',
        array(
            'label' => 'Twitter URL',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

    
    /**
     * YouTube
     */
    $wp_customize->add_setting(
        'youtube_textbox',
        array(
            'default' => 'https://www.youtube.com/channel/UCIvQkiNnqdfsVdaJmaaS2jA/',
        )
    );

    $wp_customize->add_control(
        'youtube_textbox',
        array(
            'label' => 'YouTube URL',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

    
    /**
     * Facebook
     */
    $wp_customize->add_setting(
        'facebook_textbox',
        array(
            'default' => 'https://www.instagram.com/fffsig/',
        )
    );

    $wp_customize->add_control(
        'facebook_textbox',
        array(
            'label' => 'Facebook URL',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

    
    /**
     * eMail
     */
    $wp_customize->add_setting(
        'email_textbox',
        array(
            'default' => 'info@fffsig.de',
        )
    );

    $wp_customize->add_control(
        'email_textbox',
        array(
            'label' => 'Email-Adresse',
            'section' => 'sec_socialicons',
            'type' => 'text',
        )
    );

}
add_action('customize_register', 'socialicons_customizer');