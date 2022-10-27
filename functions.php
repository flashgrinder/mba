<?php

    define('STANDART_DIR', get_stylesheet_directory_uri() . '/assets/');

    // Отключаем админбар
    if ( ! current_user_can( 'manage_options' ) ) {
        show_admin_bar( false );
    }

    /* Actions */
    include_once(__DIR__ . '/inc/actions.php');
    /* Filters */
    include_once(__DIR__ . '/inc/filters.php');
    /* Post Type Events */
    include_once(__DIR__ . '/inc/post-type_events.php');
    /* Calendar-action */
    include_once(__DIR__ . '/inc/calendar-action.php');
    /* Calendar */
    include_once(__DIR__ . '/inc/calendar.php');