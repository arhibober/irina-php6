<?php
Kirki::add_section('footer-copyright', array(
    'title' => esc_attr__('Footer copyright', 'sydney2021'),
    'priority' => 1,
    'capability' => 'edit_theme_options',
));

Kirki::add_field('sydney2021', array(
    'type' => 'textarea',
    'settings' => 'fcopyright',
    'label' => esc_html__('Copyright', 'sydney2021'),
    'section' => 'footer-copyright',
    'sanitize_callback' => 'wp_kses_post',
    'default' => 'Sydney 2021 © 2021 All Rights Reserved. Developed by - <a href="https://github.com/miwanoff" target="_blank">MAI</a>',
));