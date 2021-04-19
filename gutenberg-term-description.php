<?php
/*
Plugin Name: Gutenberg Term Descriptions
Plugin Description: Добавляет к селекту термов в редакторе постов описание из поля description терма
*/

function myguten_enqueue() {
    wp_enqueue_script( 'myguten-script',
        plugins_url( 'build/index.js', __FILE__ ),
        array( 'wp-blocks', 'wp-url', 'wp-data', 'wp-element', 'wp-components', 'wp-element', 'wp-compose', 'wp-data', 'wp-api-fetch' )
    );
    // Сюда добавить таксономии. Внимание! Таксономии должны быть иерархические (как рубрики).
    wp_localize_script( 'myguten-script', 'mygutenTaxData', [
        'category',
        'my_tax',
    ] );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );
