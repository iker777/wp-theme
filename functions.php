<?php
function mi_tema_enqueue_styles() {
    wp_enqueue_style('estilos-principales', get_stylesheet_uri());
}

function mi_tema_tailwind() {
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/style-tailwind.css',
        array(),
        null
    );
}

function mi_tema_scripts() {
    wp_enqueue_script(
        'main-js', // ID único
        get_template_directory_uri() . '/assets/js/main.js', // Ruta al archivo
        array(), // Dependencias (por ejemplo ['jquery'] si lo necesitas)
        null, // Versión (puedes poner '1.0' o null)
        true // Cargar al final del <body>
    );
}


add_action('wp_enqueue_scripts', 'mi_tema_scripts');
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');
add_action('wp_enqueue_scripts', 'mi_tema_tailwind');
// No pongas el cierre de PHP aquí