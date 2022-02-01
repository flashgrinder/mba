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
                <div class="footer__contacts-wrapper">
                    <h3 class="footer__headline text text--very-big text--white text--w-bold">
                        Контакты
                    </h3>
                    <a href="tel:+79998887766" class="footer__phone text text--normal text--white text--w-light">
                        <span class="footer__phone-text">
                            Телефон:
                        </span>
                        <span class="footer__phone-num">
                            +7 999 - 888 - 77 - 66
                        </span>
                    </a>
                    <a href="mailto:MBA_club@gmail.com" class="footer__email text text--normal text--white text--w-light">
                        <span class="footer__email-text">
                            E-mail:
                        </span>
                        <span class="footer__email-line">
                            MBA_club@gmail.com
                        </span>
                    </a>
                    <div class="footer__social">
                        <a href="https://www.facebook.com/Клуб-выпускников-МВА-ЭФ-МГУ-101460292001270/" class="footer__social-icon">
                            <img src="<?php echo STANDART_DIR; ?>img/icons/soc-icon-fb.svg" alt="" class="footer__social-img">
                        </a>
                        <a href="https://www.instagram.com/mba.ef.mgu.club/" class="footer__social-icon">
                            <img src="<?php echo STANDART_DIR; ?>img/icons/soc-icon-inst.svg" alt="" class="footer__social-img">
                        </a>
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
    <?php wp_footer(); ?>
</body>
</html>