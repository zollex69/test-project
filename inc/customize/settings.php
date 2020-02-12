<?php

add_action( 'customize_register', 'settings_customize_register');
function settings_customize_register( $wp_customize ) {

    // add new section
    $wp_customize->add_section( 'word_before_title' , array(
        'title'      => 'Тестовое задание',
        'priority'   => 30,
    ) );

    // add new option in db
    $wp_customize->add_setting(
        'my_options[my_first_option]',
        array(
            'default'    => 'FEST',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
        )
    );

    // add input in section
    $wp_customize->add_control(
        'my_first_option',
        array(
            'label'      => 'Слово перед заголовком постов',
            'section'    => 'word_before_title',
            'settings'   => 'my_options[my_first_option]',
        )
    );   
}