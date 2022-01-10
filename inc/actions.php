<?php

    /* Подключение стилей и скриптов */
    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time() );
        /* Swiper */
        wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', [], time() );
        wp_enqueue_style( 'styl', get_stylesheet_directory_uri() . '/style.css', [], time() );


        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true );
        /* Swiper */
        wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', [], time(), true );

        wp_enqueue_script( 'calendar', get_stylesheet_directory_uri() . '/inc/calendar.js', ['jquery'], time(), true );

    } );

    add_action( 'wp_enqueue_scripts', 'action_function_url', 99 );
    
    function action_function_url(){
        wp_localize_script( 'calendar', 'mba', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ) );
    }

    function mba_register_post_type() {
    	register_post_type( 'events', array(
            'labels'             => array(
    	        'name'                  => 'События',
    	        'singular_name'         => 'Событие',
    	    ),
    		'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'capability_type'    => 'post',
            'has_archive'        => false,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title'),
        ) );

        register_taxonomy(
            'events-category',
            'events',
            array(
                'label' => 'Категории',
    			'meta_box_cb' => 'post_categories_meta_box'
            )
        );

    }

    add_action( 'init', 'mba_register_post_type' );

    add_action( 'after_setup_theme', function(){

        // Регистрируем главное меню
		register_nav_menu('header-menu', 'Меню в шапке');

		// Регистрируем меню в подвале
		register_nav_menu('footer-menu', 'Меню в подвале');

        // Смена логотипа
		add_theme_support('custom-logo');

        /* Добавляем возможность ставить постам миниатюры */
        add_theme_support('post-thumbnails');

        /* Тайтлы старницы ставятся автоматом */
        add_theme_support('title-tag');

        /* Включаем поддержку html5 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /* Отключаем админбар */
        // add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

    });

    add_action( 'wp_head', function() {

		?>


		<?php

	}, 20);
