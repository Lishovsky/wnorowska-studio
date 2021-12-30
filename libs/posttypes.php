<?php

//services

add_action('init', 'WNOROWSKA_INIT_POSTTYPES');
function WNOROWSKA_INIT_POSTTYPES()
{
    $services_args = array(
        'labels' => array(
            'name' => 'zabiegi',
            'singular_name' => 'zabiegi',
            'all_items' => 'Wszystkie zabiegi',
            'add_new' => 'Dodaj nowy zabieg',
            'add_new_item' => 'Dodaj nowy zabieg',
            'edit_item' => 'Edytuj zabieg',
            'new_item' => 'Nowa zabieg',
            'view_item' => 'Zobacz zabieg',
            'search_items' => 'Szukaj w zabiegach',
            'not_found' => 'Nie znaleziono żadnych zabiegów',
            'not_found_in_trash' => 'Nie znaleziono żadnego zabiegu w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ),
        'has_archive' => false
    );

    register_post_type('services', $services_args);

    //course

    $course_args = array(
        'labels' => array(
            'name' => 'Szkolenia',
            'singular_name' => 'Szkolenia',
            'all_items' => 'Wszystkie szkolenia',
            'add_new' => 'Dodaj nowe szkolenie',
            'add_new_item' => 'Dodaj nowe szkolenie',
            'edit_item' => 'Edytuj szkolenie',
            'new_item' => 'Nowe szkolenie',
            'view_item' => 'Zobacz szkolenie',
            'search_items' => 'Szukaj w szkoleniach',
            'not_found' => 'Nie znaleziono żadnych szkoleń',
            'not_found_in_trash' => 'Nie znaleziono żadnych szkoleń w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ),
        'has_archive' => false
    );

    register_post_type('course', $course_args);
}


add_action('init', 'WNOROWSKA_INIT_TAXONOMIES');


function WNOROWSKA_INIT_TAXONOMIES()
{
    register_taxonomy(
        'price',
        array('course'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Cena',
                'singular_name' => 'Cena',
                'search_items' =>  'Wyszukaj cene',
                'all_items' => 'Wszystkie ceny',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj cene',
                'update_item' => 'Aktualizuj cene',
                'add_new_item' => 'Dodaj nową cene',
                'new_item_name' => 'Wartość nowej ceny',
                'add_or_remove_items' => 'Dodaj lub usuń cene',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych cen',
                'menu_name' => 'Ceny',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'price')
        )
    );

    register_taxonomy(
        'time',
        array('course'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Czas trwania',
                'singular_name' => 'Czas trwania',
                'search_items' =>  'Wyszukaj po czasie',
                'all_items' => 'Wszystkie czasy trwania',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj czas trwania',
                'update_item' => 'Aktualizuj czas trwania',
                'add_new_item' => 'Dodaj nowy czas trwania',
                'new_item_name' => 'Wartość nowego czasu trwania',
                'add_or_remove_items' => 'Dodaj lub usuń czas trwania',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych czasów trwania',
                'menu_name' => 'Czasy trwania',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'time')
        )
    );

    register_taxonomy(
        'category',
        array('services'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'kategorie',
                'singular_name' => 'kategorie',
                'search_items' =>  'Wyszukaj po kategorii',
                'all_items' => 'Wszystkie kategorie',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj kategorie',
                'update_item' => 'Aktualizuj kategorie',
                'add_new_item' => 'Dodaj nową kategorie',
                'new_item_name' => 'Wartość nowej kategorii',
                'add_or_remove_items' => 'Dodaj lub usuń kategorie',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych kategorii',
                'menu_name' => 'kategorii',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'category')
        )
    );
}
