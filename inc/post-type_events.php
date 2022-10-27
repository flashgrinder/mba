<?php

    function action_function_url(){
        wp_localize_script( 'calendar', 'mba', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ) );
    }

    function mba_register_post_type() {
        register_post_type( 'events', array(
            'labels'             => array(
                'name'               => 'События',
                'singular_name'      => 'Событие',
                'add_new'            => 'Добавить событие',
                'add_new_item'       => 'Добавить событие',
                'edit_item'          => 'Редактировать событие',
                'new_item'           => 'Новое событие',
                'view_item'          => 'Посмотреть событие',
                'search_items'       => 'Найти событие',
                'not_found'          => 'Событий не найдено',
                'not_found_in_trash' => 'В корзине не найдено событий',
                'parent_item_colon'  => '',
                'menu_name'          => 'События'
            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'rewrite'            => array('slug' => 'sobitiya', 'with_front' => false),
            'supports'           => array('title', 'editor','thumbnail','author','custom-fields','revisions'),
            'taxonomies'         => ['events-category'],
        ) );

        register_taxonomy(
            'events-category',
            'events',
            array(
                'label' => 'Категории',
                'labels' => array(
                    'name'                       => 'Категории',
                    'singular_name'              => 'Категория',
                    'menu_name'                  => 'Категории' ,
                    'all_items'                  => 'Все категории',
                    'edit_item'                  => 'Редактировать категорию',
                    'view_item'                  => 'Посмотреть категорию',
                    'update_item'                => 'Сохранить категорию',
                    'add_new_item'               => 'Добавить новую категорию',
                    'new_item_name'              => 'Новая категория',
                    'parent_item'                => 'Родительская категория',
                    'parent_item_colon'          => 'Родительская категория:',
                    'search_items'               => 'Поиск по категориям',
                    'popular_items'              => 'Популярные Метки',
                    'separate_items_with_commas' => 'Список Меток (разделяются запятыми)',
                    'add_or_remove_items'        => 'Добавить или удалить Метку',
                    'choose_from_most_used'      => 'Выбрать Метку',
                    'add_or_remove_items'        => 'Добавить или удалить Метку',
                    'not_found'                  => 'Меток не найдено',
                    'back_to_items'              => 'Назад на страницу рубрик',
                ),
                'meta_box_cb' => 'post_categories_meta_box',
                'show_admin_column'     => true,
                'public'                => true,
                'show_in_nav_menus'     => false, // равен аргументу public
                'show_ui'               => true, // равен аргументу public
                'show_in_menu'          => true, // равен аргументу show_ui
                'show_in_rest'          => true,
                'show_tagcloud'         => true, // равен аргументу show_ui
                'hierarchical'          => true,
                'query_var'             => true,
            )
        );
        register_taxonomy(
            'events-year',
            'events',
            array(
                'label' => 'Год',
                'labels' => array(
                    'name'                       => 'Года',
                    'singular_name'              => 'Год',
                    'menu_name'                  => 'Года' ,
                    'all_items'                  => 'Все года',
                    'edit_item'                  => 'Редактировать год',
                    'view_item'                  => 'Посмотреть год',
                    'update_item'                => 'Сохранить год',
                    'add_new_item'               => 'Добавить новый год',
                    'new_item_name'              => 'Новый год',
                    'parent_item'                => 'Родительский год',
                    'parent_item_colon'          => 'Родительский год:',
                    'search_items'               => 'Поиск по годам',
                    'popular_items'              => 'Популярные Метки',
                    'separate_items_with_commas' => 'Список Меток (разделяются запятыми)',
                    'add_or_remove_items'        => 'Добавить или удалить Метку',
                    'choose_from_most_used'      => 'Выбрать Метку',
                    'add_or_remove_items'        => 'Добавить или удалить Метку',
                    'not_found'                  => 'Меток не найдено',
                    'back_to_items'              => 'Назад на страницу выбора года',
                ),
                'meta_box_cb' => 'post_categories_meta_box',
                'show_admin_column'     => true,
                'public'                => true,
                'show_in_nav_menus'     => false, // равен аргументу public
                'show_ui'               => true, // равен аргументу public
                'show_in_menu'          => true, // равен аргументу show_ui
                'show_in_rest'          => true,
                'show_tagcloud'         => true, // равен аргументу show_ui
                'hierarchical'          => true,
                'query_var'             => true,
            )
        );

    }