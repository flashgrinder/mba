    </main>
    <!-- /. MAIN -->

    <!-- Footer -->
    <footer class="footer bg--black-hight">
        <div class="footer__body container">
            <div class="footer__inner">
                <a href="<?php echo home_url(); ?>" class="footer__logo">
                    <img src="<?php echo STANDART_DIR; ?>img/logo-footer.png" alt="" class="footer__img-logo">
                </a>
                <div class="footer__nav-wrapper">
                    <h3 class="footer__headline text text--very-big text--white text--w-bold">
                        Навигация
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                    <ul class="footer__lang footer__lang--desktop text text--normal text--white text--w-light hide">
                        <li class="footer__lang-item">
                            <a href="" class="footer__lang-link">En</a>
                        </li>
                        <li class="footer__lang-item">
                            <a href="" class="footer__lang-link">Ru</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__contacts-wrapper" id="contacts">
                    <h3 class="footer__headline text text--very-big text--white text--w-bold">
                        Контакты
                    </h3>
                    <a href="tel:+79372255338" class="footer__phone text text--normal text--white text--w-light">
                        <span class="footer__phone-text">
                            Телефон:
                        </span>
                        <span class="footer__phone-num">
                            +7 937 225-53-38
                        </span>
                    </a>
                    <a href="mailto:MBA_club@gmail.com" class="footer__email text text--normal text--white text--w-light">
                        <span class="footer__email-text">
                            E-mail:
                        </span>
                        <span class="footer__email-line">
                            info@mba-mgu.club
                        </span>
                    </a>
                    <div class="footer__social">
                        <a href="https://t.me/mba_ef_mgu_club" class="footer__social-icon">
                            <img src="<?php echo STANDART_DIR; ?>img/icons/soc-icon-tg.svg" alt="" class="footer__social-img">
                        </a>
                    </div>
                    <ul class="footer__lang footer__lang--mobile text text--normal text--white text--w-light hide">
                        <li class="footer__lang-item">
                            <a href="" class="footer__lang-link">En</a>
                        </li>
                        <li class="footer__lang-item">
                            <a href="" class="footer__lang-link">Ru</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__actions">
                <a href="javascript:;" class="footer__btn button button--white" data-hystmodal="#become-reident">
                    Стать резидентом
                </a>
                <a href="javascript:;" class="footer__btn button button--dark" data-hystmodal="#contact-us">
                    Связаться с нами
                </a>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->

    <div class="devsite">
        <div class="devsite__outer">
            <a href="https://fcdigital.ru" class="devsite__link">
                <div class="devsite__text">
                    Разработка и дизайн сайта Fincom Digital
                </div>
                <div class="devsite__logo">
                    <svg class="devsite__logo-img" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5011 21.5088V44.0319L10.9922 32.7703L20.3166 23.6463L22.5011 21.5088Z" fill="white"/>
                        <path d="M27.791 38.8534V5.17578L44.9998 22.0146L27.791 38.8534Z" fill="white"/>
                        <path d="M22.5014 0V15.2512L7.79316 29.6403L0 22.0147L20.3169 2.13755L22.5014 0Z" fill="white"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>