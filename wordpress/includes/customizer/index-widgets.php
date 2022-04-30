<?php

function indexwidgets_customizer($wp_customize) {
    $wp_customize->add_section(
        'sec_indexwidgets1',
        array(
            'title' => 'Erste Box',
            'description' => 'Hier kann die erste Box der Homepage konfiguriert werden.',
            'priority' => 34,
        )
    );


    /***************
    * First Widget *
    ***************/

    /**
     * Heading
     */
    $wp_customize->add_setting(
        'first_widget_name',
        array(
            'default' => 'Wer wir sind . . .',
        )
    );

    $wp_customize->add_control(
        'first_widget_name',
        array(
            'label' => 'Überschrift Widget 1',
            'section' => 'sec_indexwidgets1',
            'type' => 'textbox',
        )
    );
    
    /**
     * Text
     */
    $wp_customize->add_setting(
        'first_widget_text',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dignissimos doloremque inventore ipsum iusto laboriosam libero molestias non nostrum numquam quae quam quidem quos repellendus sequi sit soluta totam, velit. Eveniet ipsum porro reprehenderit? Dolore, dolorem exercitationem laborum necessitatibus repellendus totam velit veniam vitae? Cum expedita laudantium magni saepe soluta.',
        )
    );

    $wp_customize->add_control(
        'first_widget_text',
        array(
            'label' => 'Widget 1 Textbox',
            'section' => 'sec_indexwidgets1',
            'type' => 'textarea',
        )
    );

    /**
     * Link Name
     */
    $wp_customize->add_setting(
        'first_widget_link_name',
        array(
            'default' => 'Was wir tun . . .',
        )
    );

    $wp_customize->add_control(
        'first_widget_link_name',
        array(
            'label' => 'Link-Name Widget 1',
            'section' => 'sec_indexwidgets1',
            'type' => 'textbox',

        )
    );

    /**
     * Link
     */
    $wp_customize->add_setting(
        'first_widget_link',
        array(
            'default' => 'https://fff-sigmaringen.de/was-wir-tun',
        )
    );

    $wp_customize->add_control(
        'first_widget_link',
        array(
            'label' => 'Link Widget 1',
            'section' => 'sec_indexwidgets1',
            'type' => 'textbox',
        )
    );


    /****************
    * Second Widget *
    ****************/
    $wp_customize->add_section(
        'sec_indexwidgets2',
        array(
            'title' => 'Zweite Box',
            'description' => 'Hier kann die zweite Box der Homepage konfiguriert werden.',
            'priority' => 34,
        )
    );

    /**
     * Heading
     */
    $wp_customize->add_setting(
        'second_widget_name',
        array(
            'default' => 'Du willst helfen?',

        )
    );

    $wp_customize->add_control(
        'second_widget_name',
        array(
            'label' => "\n\n\n" . 'Überschrift Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textbox',
        )
    );

    /**
     * Text
     */
    $wp_customize->add_setting(
        'second_widget_text',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dignissimos doloremque inventore ipsum iusto laboriosam libero molestias non nostrum numquam quae quam quidem quos repellendus sequi sit soluta totam, velit. Eveniet ipsum porro reprehenderit? Dolore, dolorem exercitationem laborum necessitatibus repellendus totam velit veniam vitae? Cum expedita laudantium magni saepe soluta.',
        )
    );

    $wp_customize->add_control(
        'second_widget_text',
        array(
            'label' => 'Text Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textarea',
        )
    );

    /**
     * First link name
     */
    $wp_customize->add_setting(
        'second_widget_1_link_name',
        array(
            'default' => 'Mitmachen . . .',
        )
    );

    $wp_customize->add_control(
        'second_widget_1_link_name',
        array(
            'label' => 'Erster Link Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textbox',
        )
    );

    /**
     * First link
     */
    $wp_customize->add_setting(
        'second_widget_1_link',
        array(
            'default' => 'https://fff-sigmaringen.de/mitmachen',
        )
    );

    $wp_customize->add_control(
        'second_widget_1_link',
        array(
            'label' => '1 Link Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textbox',
        )
    );

    /**
    * Second link name
    */
    $wp_customize->add_setting(
        'second_widget_2_link_name',
        array(
            'default' => 'Aktionen . . .',
        )
    );

    $wp_customize->add_control(
        'second_widget_2_link_name',
        array(
            'label' => 'Zweiter Link Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textbox',
        )
    );

    /**
    * Second link
    */
    $wp_customize->add_setting(
        'second_widget_2_link',
        array(
            'default' => 'https://fff-sigmaringen.de/aktionen',
        )
    );

    $wp_customize->add_control(
        'second_widget_2_link',
        array(
            'label' => '2 Link Widget 2',
            'section' => 'sec_indexwidgets2',
            'type' => 'textbox',
        )
    );


    /***************
    * Third Widget *
    ***************/
    $wp_customize->add_section(
        'sec_indexwidgets3',
        array(
            'title' => 'Dritte Box',
            'description' => 'Hier kann die dritte Box der Homepage konfiguriert werden.',
            'priority' => 34,
        )
    );

    /**
     * Heading
     */
    $wp_customize->add_setting(
        'third_widget_name',
        array(
            'default' => 'Was gibt\'s Neues?',
        )
    );

    $wp_customize->add_control(
        'third_widget_name',
        array(
            'label' => 'Überschrift Widget 2',
            'section' => 'sec_indexwidgets3',
            'type' => 'textbox',
        )
    );

    /**
     * Text
     */
    $wp_customize->add_setting(
        'third_widget_text',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dignissimos doloremque inventore ipsum iusto laboriosam libero molestias non nostrum numquam quae quam quidem quos repellendus sequi sit soluta totam, velit. Eveniet ipsum porro reprehenderit? Dolore, dolorem exercitationem laborum necessitatibus repellendus totam velit veniam vitae? Cum expedita laudantium magni saepe soluta.',
        )
    );

    $wp_customize->add_control(
        'third_widget_text',
        array(
            'label' => 'Text Widget 2',
            'section' => 'sec_indexwidgets3',
            'type' => 'textarea',
        )
    );

    /**
     * Link name
     */
    $wp_customize->add_setting(
        'third_widget_link_name',
        array(
            'default' => 'Blog . . .',
        )
    );

    $wp_customize->add_control(
        'third_widget_link_name',
        array(
            'label' => 'Link-Name Widget 2',
            'section' => 'sec_indexwidgets3',
            'type' => 'textbox',
        )
    );

    /**
     * Link
     */
    $wp_customize->add_setting(
        'third_widget_link',
        array(
            'default' => 'https://fff-sigmaringen.de/blog',
        )
    );

    $wp_customize->add_control(
        'third_widget_link',
        array(
            'label' => 'Link Widget 2',
            'section' => 'sec_indexwidgets3',
            'type' => 'textbox',
        )
    );
}

add_action('customize_register', 'indexwidgets_customizer');