<?php /* Template Name: Прошедшие мероприятия */?>
<?php get_header(); ?>

<!-- Events -->
<section class="events bg--dark block-padding">
    <div class="events__body container">
        <h1 class="events__heading title title--big title--white title--w-semibold title--indent">
            Будущие мероприятия
        </h1>
        <div class="events__filter">
            <p class="events__filter-name text text--big text--white text--w-light">
                Фильтр мероприятий
            </p>
            <span class="events__fiter-icon">
                <svg class="events__fiter-svg" width="33" height="28" viewBox="0 0 33 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.25 5.02619H10C9.66848 5.02619 9.35054 4.8938 9.11612 4.65813C8.8817 4.42247 8.75 4.10284 8.75 3.76956C8.75 3.43629 8.8817 3.11666 9.11612 2.881C9.35054 2.64533 9.66848 2.51294 10 2.51294H31.25C31.5815 2.51294 31.8995 2.64533 32.1339 2.881C32.3683 3.11666 32.5 3.43629 32.5 3.76956C32.5 4.10284 32.3683 4.42247 32.1339 4.65813C31.8995 4.8938 31.5815 5.02619 31.25 5.02619Z" fill="white" fill-opacity="0.75"/>
                    <path d="M5 5.02619H1.25C0.918479 5.02619 0.600537 4.8938 0.366116 4.65813C0.131696 4.42247 0 4.10284 0 3.76956C0 3.43629 0.131696 3.11666 0.366116 2.881C0.600537 2.64533 0.918479 2.51294 1.25 2.51294H5C5.33152 2.51294 5.64946 2.64533 5.88388 2.881C6.1183 3.11666 6.25 3.43629 6.25 3.76956C6.25 4.10284 6.1183 4.42247 5.88388 4.65813C5.64946 4.8938 5.33152 5.02619 5 5.02619Z" fill="white" fill-opacity="0.75"/>
                    <path d="M22.5 15.0797H1.25C0.918479 15.0797 0.600537 14.9473 0.366116 14.7116C0.131696 14.4759 0 14.1562 0 13.8229C0 13.4896 0.131696 13.1699 0.366116 12.9343C0.600537 12.6986 0.918479 12.5662 1.25 12.5662H22.5C22.8315 12.5662 23.1495 12.6986 23.3839 12.9343C23.6183 13.1699 23.75 13.4896 23.75 13.8229C23.75 14.1562 23.6183 14.4759 23.3839 14.7116C23.1495 14.9473 22.8315 15.0797 22.5 15.0797Z" fill="white" fill-opacity="0.75"/>
                    <path d="M10 25.1329H1.25C0.918479 25.1329 0.600537 25.0005 0.366116 24.7648C0.131696 24.5292 0 24.2095 0 23.8763C0 23.543 0.131696 23.2233 0.366116 22.9877C0.600537 22.752 0.918479 22.6196 1.25 22.6196H10C10.3315 22.6196 10.6495 22.752 10.8839 22.9877C11.1183 23.2233 11.25 23.543 11.25 23.8763C11.25 24.2095 11.1183 24.5292 10.8839 24.7648C10.6495 25.0005 10.3315 25.1329 10 25.1329Z" fill="white" fill-opacity="0.75"/>
                    <path d="M7.5 7.54C6.75832 7.54 6.0333 7.31889 5.41661 6.90464C4.79993 6.49038 4.31928 5.90159 4.03545 5.21271C3.75162 4.52384 3.67736 3.76582 3.82206 3.03451C3.96675 2.3032 4.3239 1.63145 4.84835 1.10421C5.3728 0.576965 6.04098 0.217907 6.76841 0.0724411C7.49584 -0.073025 8.24984 0.00163349 8.93506 0.286976C9.62029 0.572318 10.206 1.05553 10.618 1.6755C11.0301 2.29547 11.25 3.02436 11.25 3.77C11.25 4.76986 10.8549 5.72878 10.1517 6.43579C9.44839 7.1428 8.49456 7.54 7.5 7.54ZM7.5 2.51333C7.25277 2.51333 7.0111 2.58704 6.80554 2.72512C6.59998 2.8632 6.43976 3.05947 6.34515 3.28909C6.25054 3.51872 6.22579 3.77139 6.27402 4.01516C6.32225 4.25893 6.4413 4.48285 6.61612 4.6586C6.79093 4.83434 7.01366 4.95403 7.25614 5.00252C7.49861 5.05101 7.74995 5.02612 7.97836 4.93101C8.20676 4.83589 8.40199 4.67482 8.53934 4.46816C8.67669 4.26151 8.75 4.01854 8.75 3.77C8.75 3.43671 8.6183 3.11707 8.38388 2.8814C8.14946 2.64573 7.83152 2.51333 7.5 2.51333Z" fill="white" fill-opacity="0.75"/>
                    <path d="M25 17.5927C24.2583 17.5927 23.5333 17.3716 22.9166 16.9574C22.2999 16.5432 21.8193 15.9544 21.5355 15.2656C21.2516 14.5768 21.1774 13.8188 21.3221 13.0875C21.4668 12.3563 21.8239 11.6846 22.3484 11.1574C22.8728 10.6301 23.541 10.2711 24.2684 10.1257C24.9958 9.9802 25.7498 10.0549 26.4351 10.3402C27.1203 10.6255 27.706 11.1087 28.118 11.7286C28.5301 12.3485 28.75 13.0774 28.75 13.823C28.75 14.8228 28.3549 15.7816 27.6517 16.4886C26.9484 17.1956 25.9946 17.5927 25 17.5927ZM25 12.5664C24.7528 12.5664 24.5111 12.6401 24.3055 12.7782C24.1 12.9162 23.9398 13.1125 23.8452 13.3421C23.7505 13.5717 23.7258 13.8244 23.774 14.0681C23.8223 14.3119 23.9413 14.5358 24.1161 14.7115C24.2909 14.8873 24.5137 15.0069 24.7561 15.0554C24.9986 15.1039 25.2499 15.079 25.4784 14.9839C25.7068 14.8888 25.902 14.7277 26.0393 14.5211C26.1767 14.3145 26.25 14.0715 26.25 13.823C26.25 13.4897 26.1183 13.1701 25.8839 12.9344C25.6495 12.6988 25.3315 12.5664 25 12.5664Z" fill="white" fill-opacity="0.75"/>
                    <path d="M12.5 27.6459C11.7583 27.6459 11.0333 27.4249 10.4166 27.0107C9.79993 26.5964 9.31928 26.0077 9.03545 25.3189C8.75162 24.6301 8.67736 23.8721 8.82206 23.1409C8.96675 22.4097 9.3239 21.738 9.84835 21.2108C10.3728 20.6836 11.041 20.3246 11.7684 20.1791C12.4958 20.0337 13.2498 20.1083 13.9351 20.3936C14.6203 20.679 15.206 21.1621 15.618 21.782C16.0301 22.4019 16.25 23.1308 16.25 23.8763C16.25 24.8761 15.8549 25.8349 15.1517 26.5419C14.4484 27.2488 13.4946 27.6459 12.5 27.6459ZM12.5 22.6198C12.2528 22.6198 12.0111 22.6935 11.8055 22.8315C11.6 22.9696 11.4398 23.1659 11.3452 23.3955C11.2505 23.6251 11.2258 23.8777 11.274 24.1215C11.3223 24.3652 11.4413 24.5891 11.6161 24.7648C11.7909 24.9406 12.0137 25.0602 12.2561 25.1087C12.4986 25.1572 12.7499 25.1323 12.9784 25.0372C13.2068 24.9421 13.402 24.7811 13.5393 24.5744C13.6767 24.3678 13.75 24.1248 13.75 23.8763C13.75 23.5431 13.6183 23.2235 13.3839 22.9878C13.1495 22.7522 12.8315 22.6198 12.5 22.6198Z" fill="white" fill-opacity="0.75"/>
                    <path d="M31.25 15.0797H27.5C27.1685 15.0797 26.8505 14.9473 26.6161 14.7116C26.3817 14.4759 26.25 14.1562 26.25 13.8229C26.25 13.4896 26.3817 13.1699 26.6161 12.9343C26.8505 12.6986 27.1685 12.5662 27.5 12.5662H31.25C31.5815 12.5662 31.8995 12.6986 32.1339 12.9343C32.3683 13.1699 32.5 13.4896 32.5 13.8229C32.5 14.1562 32.3683 14.4759 32.1339 14.7116C31.8995 14.9473 31.5815 15.0797 31.25 15.0797Z" fill="white" fill-opacity="0.75"/>
                    <path d="M31.25 25.1329H15C14.6685 25.1329 14.3505 25.0005 14.1161 24.7648C13.8817 24.5292 13.75 24.2095 13.75 23.8763C13.75 23.543 13.8817 23.2233 14.1161 22.9877C14.3505 22.752 14.6685 22.6196 15 22.6196H31.25C31.5815 22.6196 31.8995 22.752 32.1339 22.9877C32.3683 23.2233 32.5 23.543 32.5 23.8763C32.5 24.2095 32.3683 24.5292 32.1339 24.7648C31.8995 25.0005 31.5815 25.1329 31.25 25.1329Z" fill="white" fill-opacity="0.75"/>
                </svg>
            </span>
        </div>
        <div class="events__items">
            <a href="" class="events__item">
                <div class="events__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/uploads/event-photo-1.jpg" alt="" class="events__thumb">
                </div>
                <div class="events__inner">
                    <div class="events__heading">
                        <h3 class="events__headline text text--large text--white text--w-light">
                            Бизнес-регата
                        </h3>
                        <div class="events__date text text--normal text--dark-low text--w-light">
                            25 августа 2020
                        </div>
                    </div>
                    <p class="events__excerpt text text--large text--white text--w-light">
                        Вступив в Клуб все участники развиваются через обмен опытом и масштабируются благодаря партнёрству...
                    </p>
                </div>
            </a>
            <a href="" class="events__item">
                <div class="events__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/uploads/event-photo-1.jpg" alt="" class="events__thumb">
                </div>
                <div class="events__inner">
                    <div class="events__heading">
                        <h3 class="events__headline text text--large text--white text--w-light">
                            Бизнес-регата
                        </h3>
                        <div class="events__date text text--normal text--dark-low text--w-light">
                            25 августа 2020
                        </div>
                    </div>
                    <p class="events__excerpt text text--large text--white text--w-light">
                        Вступив в Клуб все участники развиваются через обмен опытом и масштабируются благодаря партнёрству...
                    </p>
                </div>
            </a>
            <a href="" class="events__item">
                <div class="events__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/uploads/event-photo-1.jpg" alt="" class="events__thumb">
                </div>
                <div class="events__inner">
                    <div class="events__heading">
                        <h3 class="events__headline text text--large text--white text--w-light">
                            Бизнес-регата
                        </h3>
                        <div class="events__date text text--normal text--dark-low text--w-light">
                            25 августа 2020
                        </div>
                    </div>
                    <p class="events__excerpt text text--large text--white text--w-light">
                        Вступив в Клуб все участники развиваются через обмен опытом и масштабируются благодаря партнёрству...
                    </p>
                </div>
            </a>
        </div>
        <nav class="events__navigation pagination" role="navigation">
			<div class="nav-links text text--large text--white text--w-light">
                <span aria-current="page" class="page-numbers current">1</span>
                <a class="page-numbers" href="https://document247.us/stati/page/2/">2</a>
                <span class="page-numbers dots">…</span>
                <a class="page-numbers" href="https://document247.us/stati/page/31/">31</a>
            </div>
        </nav>
    </div>
</section>
<!-- Events -->

<?php get_footer(); ?>