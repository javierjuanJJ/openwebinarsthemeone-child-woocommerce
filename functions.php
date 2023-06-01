<?php
function openwebinarasthemeone_child_put_styles_and_scripts()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

//add_action('wp_enqueue_scripts', 'openwebinarasthemeone_put_styles_and_scripts');
add_action('wp_enqueue_scripts', 'openwebinarasthemeone_child_put_styles_and_scripts');
