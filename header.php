<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <meta name="theme-color" content="#505050"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#505050"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class('page bg--dark-low'); ?>>
    
    <header class="header">
        <div class="header__outer">
            <div class="header__body container">
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                    <?php if( !empty($custom_logo__url[0])) : ?>
                        <img src="<?php echo $custom_logo__url[0]; ?>" alt="Логотип" class="header__img-logo">
                    <?php else : ?>
                        <img src="<?php echo STANDART_DIR; ?>img/logo-header.png" alt="Логотип" class="header__img-logo">
                    <?php endif; ?>
                </a>
                <div class="header__inner">
                    <div class="header__actions hide">
                        <a href="" class="header__btn header__btn--login text text--big text--white text--w-light">
                            Войти
                        </a>
                        <a href="" class="header__btn header__btn--registration text text--big text--white text--w-light">
                            Регистрация
                        </a>
                    </div>
                    <div class="header__burger-menu burger-menu js-burger">
                        <span class="burger-menu__line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__wrapper-menu js-menu">
            <div class="header__menu container">
                <div class="header__menu-inner">
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item header__menu-item">
                                <a href="" class="menu__link menu__link--home">
                                    Главная
                                </a>
                            </li>
                            <li class="menu__item header__menu-item">
                                <a href="" class="menu__link menu__link--rezidents">
                                    Резиденты
                                </a>
                            </li>
                            <li class="menu__item header__menu-item">
                                <a href="" class="menu__link menu__link--calendar">
                                    Календарь событий
                                </a>
                            </li>
                            <li class="menu__item header__menu-item">
                                <a href="" class="menu__link menu__link--events">
                                    Ближайшие мероприятия
                                </a>
                            </li>
                            <li class="menu__item header__menu-item">
                                <a href="" class="menu__link menu__link--contacts">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main class="main page__container">