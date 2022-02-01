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
            <div class="modal__body hystmodal__window" role="modal window contact-us" aria-modal="true">
                <div class="modal__close" data-hystclose>
                    <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="modal__title modal__field--anim title title--av-large title--white-low-65 title--w-semibold center">
                    Связаться с нами
                </h3>
                <?php echo do_shortcode( '[contact-form-7 id="47" title="Связаться с нами" html_class="modal__form"]' ); ?>
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
                <?php echo do_shortcode( '[contact-form-7 id="48" title="Заявка на участие" html_class="modal__form"]' ); ?>
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
                <?php echo do_shortcode( '[contact-form-7 id="49" title="Вступить в клуб" html_class="modal__form"]' ); ?>
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
                <?php echo do_shortcode( '[contact-form-7 id="50" title="Стать резидентом" html_class="modal__form"]' ); ?>
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
                    <div class="header__social">
                        <a href="https://www.facebook.com/Клуб-выпускников-МВА-ЭФ-МГУ-101460292001270/" class="header__social-link" target="_blank">
                            <svg class="header__social-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 4.16089C25 1.97396 23.0229 0 20.8302 0H4.16561C1.97814 0 0 1.97396 0 4.16089V20.7753C0 22.9643 1.97814 24.9341 4.16561 24.9341H12.5V15.5142H9.44684V11.3606H12.5V9.73987C12.5 6.95035 14.6021 4.43413 17.1875 4.43413H20.5562V8.59293H17.1875C16.8208 8.59293 16.3864 9.03653 16.3864 9.70561V11.3616H20.5573V15.5152H16.3864V24.9341H20.8302C23.0229 24.9341 25 22.9643 25 20.7753V4.16089Z" fill="white"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/mba.ef.mgu.club/" class="header__social-link" target="_blank">
                            <svg class="header__social-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.782 0.00934995C21.5157 0.0449688 24.9531 3.24176 24.9906 7.19901C25.0031 10.711 25.0031 14.2231 24.9906 17.7351C24.9549 21.4448 21.7497 24.8873 17.782 24.9247C14.2607 24.9372 10.7393 24.9372 7.21804 24.9247C3.48246 24.8891 0.0468733 21.6923 0.00937467 17.7351C-0.00312489 14.2231 -0.00312489 10.711 0.00937467 7.19901C0.043302 3.4715 3.2414 0.0467497 7.21804 0.00934995C10.7393 -0.00311665 14.2607 -0.00311665 17.782 0.00934995ZM7.26626 1.69234C4.36815 1.70124 1.72538 4.20703 1.69681 7.2097C1.6861 10.7146 1.6861 14.2195 1.69681 17.7244C1.7236 20.5828 4.1753 23.2132 7.22876 23.2417C10.7429 23.2524 14.2571 23.2524 17.7712 23.2417C20.6444 23.215 23.2746 20.7698 23.3032 17.7244C23.3139 14.2195 23.3139 10.7146 23.3032 7.2097C23.2764 4.3317 20.7765 1.72083 17.7712 1.69234C14.2696 1.68165 10.7679 1.69234 7.26626 1.69234Z" fill="white"/>
                                <path d="M12.541 6.78809C15.3032 6.81475 17.8776 9.03334 18.3829 11.8759C18.7431 13.9025 18.0637 16.0998 16.6296 17.5255C15.0335 19.1076 12.5632 19.673 10.4463 18.8659C8.08023 17.9646 6.41575 15.3673 6.52672 12.7363C6.66158 9.59332 9.32815 6.79875 12.5 6.78809C12.5137 6.78809 12.5274 6.78809 12.541 6.78809ZM12.4727 8.47158C10.501 8.49113 8.64188 10.0484 8.23216 12.0715C7.81733 14.1176 8.94746 16.3877 10.8031 17.2037C12.8295 18.0961 15.4466 17.0953 16.4248 15.0118C17.4371 12.859 16.4828 9.93464 14.3455 8.89468C13.7633 8.61202 13.1163 8.4698 12.4727 8.47158Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2609 5.80952C20.2609 5.37269 20.0935 4.95397 19.7978 4.64615C19.5022 4.33834 19.1 4.16406 18.6804 4.16406C18.6478 4.16406 18.613 4.16406 18.5804 4.16406C18.1609 4.16406 17.7587 4.33834 17.463 4.64615C17.1674 4.95397 17 5.37269 17 5.80952C17 5.82762 17 5.84347 17 5.86157C17 6.31198 17.1717 6.74428 17.4783 7.06115C17.7826 7.38028 18.1978 7.55908 18.6304 7.55908C19.5304 7.55908 20.2609 6.7986 20.2609 5.86157C20.2609 5.84347 20.2609 5.82762 20.2609 5.80952Z" fill="white"/>
                            </svg>
                        </a>
                        <a href="https://t.me/mba_ef_mgu_club" class="header__social-link" target="_blank">
                            <svg class="header__social-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1222_305)">
                                    <path d="M17.3886 8.16828L8.74994 13.3663C8.60143 13.4529 8.53954 13.6262 8.58905 13.7871L9.71529 17.8217C9.75242 17.9331 9.91331 17.9207 9.92568 17.797L10.1732 15.0123C10.1856 14.8019 10.2846 14.6039 10.4455 14.4678L17.4999 8.31679C17.5742 8.24253 17.4752 8.1064 17.3886 8.16828Z" fill="white"/>
                                    <path d="M20.7058 -0.0247803H4.30727C1.91865 -0.0247803 -0.0244141 1.91829 -0.0244141 4.3069V20.7054C-0.0244141 23.094 1.91865 25.0371 4.30727 25.0371H20.7058C23.0944 25.0371 25.0375 23.094 25.0375 20.7054V4.3069C25.0375 1.91829 23.082 -0.0247803 20.7058 -0.0247803ZM21.4236 5.44552L18.2553 19.8391C18.1439 20.3218 17.5746 20.5198 17.1909 20.2104L13.4781 17.2648C13.2058 17.042 12.7974 17.0792 12.5622 17.3515L10.6563 19.5544C10.3221 19.9505 9.67855 19.8143 9.53004 19.3317L7.84687 14.146C7.77261 13.9356 7.59934 13.7623 7.38895 13.7128L4.05974 12.8341C3.45331 12.6732 3.39143 11.8317 3.97311 11.5841L20.5201 4.69056C21.0152 4.49254 21.535 4.92571 21.4236 5.44552Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1222_305">
                                <rect width="25" height="25" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
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