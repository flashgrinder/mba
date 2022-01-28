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

    <!-- Modal -->
    <!-- Связаться с нами -->
    <div class="modal hystmodal" id="contact-us" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window participate" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--av-large title--white-low-65 title--w-semibold center">
                    Связаться с нами
                </h3>
                <div role="form" class="wpcf7">
                    <form class="modal__form wpcf7-form init">
                        <div class="modal__field">
                            <input type="text" class="modal__input" placeholder="ФИО">
                        </div>
                        <div class="modal__field">
                            <input type="tel" class="modal__input" placeholder="Телефон">
                        </div>
                        <div class="modal__actions">
                            <input type="button" value="Отправить" class="modal__btn button button--blue">
                        </div>
                    </form>
                </div>
                <div class="modal__policy text text--small text--w-light center">
                    Ваши данные находятся под защитой
                    <br>
                    <a href="https://mba-mgu.club/politika-konfidenczialnosti/" class="modal__link-policy text text--small text--w-light center" target="_blank">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Modal -->
    <!-- Форма заявки на участие -->
    <div class="modal hystmodal" id="participate" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window participate" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--av-large title--white-low-65 title--w-semibold center">
                    Форма заявки на участие
                </h3>
                <div role="form" class="wpcf7">
                    <form class="modal__form wpcf7-form init">
                        <div class="modal__field">
                            <input type="text" class="modal__input" placeholder="ФИО">
                        </div>
                        <div class="modal__field">
                            <input type="tel" class="modal__input" placeholder="Телефон">
                        </div>
                        <div class="modal__field">
                            <select name="" id="" class="modal__select">
                                <option value="Я участник клуба">Я участник клуба</option>
                                <option value="Я выпускник МВА ЭФ МГУ">Я выпускник МВА ЭФ МГУ</option>
                            </select>
                        </div>
                        <div class="modal__actions">
                            <input type="button" value="Отправить" class="modal__btn button button--blue">
                        </div>
                    </form>
                </div>
                <div class="modal__policy text text--small text--w-light center">
                    Ваши данные находятся под защитой
                    <br>
                    <a href="https://mba-mgu.club/politika-konfidenczialnosti/" class="modal__link-policy text text--small text--w-light center" target="_blank">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Modal -->
    <!-- Вступить в клуб -->
    <div class="modal hystmodal" id="join-club" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window join club" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--av-large title--white-low-65 title--w-semibold center">
                    Вступить в клуб
                </h3>
                <div role="form" class="wpcf7">
                    <form class="modal__form wpcf7-form init">
                        <div class="modal__field">
                            <input type="text" class="modal__input" placeholder="ФИО">
                        </div>
                        <div class="modal__field">
                            <input type="email" class="modal__input" placeholder="E-mail">
                        </div>
                        <div class="modal__field">
                            <input type="text" class="modal__input" placeholder="Телефон">
                        </div>
                        <div class="modal__field">
                            <input type="tel" class="modal__input" placeholder="Укажите специальность, на которой вы обучались">
                        </div>
                        <div class="modal__field">
                            <input type="tel" class="modal__input" placeholder="Укажите год выпуска">
                        </div>
                        <div class="modal__actions">
                            <input type="button" value="Отправить" class="modal__btn button button--blue">
                        </div>
                    </form>
                </div>
                <div class="modal__policy text text--small text--w-light center">
                    Ваши данные находятся под защитой
                    <br>
                    <a href="https://mba-mgu.club/politika-konfidenczialnosti/" class="modal__link-policy text text--small text--w-light center" target="_blank">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal -->

    <!-- Modal -->
    <!-- Стать резидентом -->
    <div class="modal hystmodal" id="become-reident" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="modal__body hystmodal__window" role="modal window become a resident" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--av-large title--white-low-65 title--w-semibold center">
                    Стать резидентом клуба
                </h3>
                <div role="form" class="wpcf7">
                    <form class="modal__form modal__form--steps wpcf7-form init">
                        <div class="modal__wrapper-one js-wrapper-first">
                            <div class="modal__field modal__field--anim">
                                <input type="text" class="modal__input" placeholder="ФИО">
                            </div>
                            <div class="modal__field modal__field--anim">
                                <input type="email" class="modal__input" placeholder="E-mail">
                            </div>
                            <div class="modal__field modal__field--monthday modal__field--anim">
                                <input type="text" class="modal__input" placeholder="Дата рождения">
                            </div>
                            <div class="modal__field modal__field--choice modal__field--anim">
                                <p class="modal__field-text text text--normal text--white-low-45">
                                    Хотели бы вы стать членом Клуба на новых условиях, оплачивая ежегодный взнос?
                                </p>
                                <span class="wpcf7-form-control-wrap modal__field-choice modal__field-choice--pay">
                                    <span class="wpcf7-form-control wpcf7-radio">
                                        <span class="wpcf7-list-item first">
                                            <span class="wpcf7-list-item-label">Да</span>
                                            <input type="radio" name="modal__field-choice--pay" value="Да">
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <span class="wpcf7-list-item-label">Нет</span>
                                            <input type="radio" name="modal__field-choice--pay" value="Нет" checked="checked">
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <div class="modal__actions modal__field--anim">
                                <input type="button" value="Далее >" class="modal__btn modal__btn--next button button--blue">
                            </div>
                        </div>
                        <div class="modal__wrapper-two js-wrapper-last">
                            <div class="modal__field modal__field--anim">
                                <input type="text" class="modal__input" placeholder="Какую компанию вы представляете?">
                            </div>
                            <div class="modal__field modal__field--anim">
                                <input type="text" class="modal__input" placeholder="Какую должность вы занимаете?">
                            </div>
                            <div class="modal__field modal__field--choice modal__field--anim">
                                <p class="modal__field-text text text--normal text--white-low-45">
                                    Готовы ли вы выступать в качестве спикера на мероприятиях Клуба?
                                </p>
                                <span class="wpcf7-form-control-wrap modal__field-choice modal__field-choice--speaker">
                                    <span class="wpcf7-form-control wpcf7-radio">
                                        <span class="wpcf7-list-item first">
                                            <span class="wpcf7-list-item-label">Да</span>
                                            <input type="radio" name="modal__field-choice--speaker" value="Да">
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <span class="wpcf7-list-item-label">Нет</span>
                                            <input type="radio" name="modal__field-choice--speaker" value="Нет" checked="checked">
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <div class="modal__field modal__field--choice modal__field--anim">
                                <p class="modal__field-text text text--normal text--white-low-45">
                                    Готовы ли вы предоставлять материалы для новостных статей на сайт и дайджест?
                                </p>
                                <span class="wpcf7-form-control-wrap modal__field-choice modal__field-choice--news">
                                    <span class="wpcf7-form-control wpcf7-radio">
                                        <span class="wpcf7-list-item first">
                                            <span class="wpcf7-list-item-label">Да</span>
                                            <input type="radio" name="modal__field-choice--news" value="Да">
                                        </span>
                                        <span class="wpcf7-list-item last">
                                            <span class="wpcf7-list-item-label">Нет</span>
                                            <input type="radio" name="modal__field-choice--news" value="Нет" checked="checked">
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <div class="modal__actions modal__field--anim">
                                <input type="button" value="Отправить" class="modal__btn button button--blue">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal__policy text text--small text--w-light center modal__field--anim">
                    Ваши данные находятся под защитой
                    <br>
                    <a href="https://mba-mgu.club/politika-konfidenczialnosti/" class="modal__link-policy text text--small text--w-light center" target="_blank">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Modal -->
    
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