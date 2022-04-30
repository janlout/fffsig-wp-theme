<?php

function announcement_customizer($wp_customize) {
    $wp_customize->add_section(
        'sec_announcement',
        array(
            'title' => 'Announcementbox',
            'description' => 'Hier kann ein Warn- oder Infohinweis konfiguriert werden.',
            'priority' => 33,
        )
    );

    
    /**
     * Message
     */
    $wp_customize->add_setting(
        'announcement_text',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dignissimos esse exercitationem expedita labore mollitia obcaecati perferendis quia rem.',
        )
    );

    $wp_customize->add_control(
        'announcement_text',
        array(
            'label' => 'Nachricht',
            'section' => 'sec_announcement',
            'type' => 'textbox',
        )
    );


    /**
     * Color
     */
    $wp_customize->add_setting(
        'announcement_color_dropdown',
        array(
            'default' => 'bg-danger',
        )
    );

    $wp_customize->add_control(
        'announcement_color_dropdown',
        array(
            'label' => 'Hintergrund',
            'section' => 'sec_announcement',
            'type' => 'select',
            'choices' => array(
                'bg-danger' => 'Rot',
                'bg-primary' => 'Hellgrün',
                'bg-secondary' =>  'Dunkelgrün',
                'bg-warning' => 'Gelb',
                'bg-info' => 'Blau',
            )
        )
    );
}

add_action('customize_register', 'announcement_customizer');
