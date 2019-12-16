<?php get_header(); ?>
<main>
    <div id="top_caption">
        <div class="p-relative h-100">
            <div id="top_caption_inner" class=" p-absolute b-100px l-0 d-none d-md-block">
                <div class="mb-50px">
                    <a href="" class="hover-opacity-05">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png" class="w-180px">
                    </a>
                </div>
                <ul class="list-unstyled font-size-20px mb-0 shadow-black">
                    <li class="mb-20px">
                        <a href="about.html" class="text-white hover-opacity-05">居酒屋について</a>
                    </li>
                    <li class="mb-20px">
                        <a href="menu.html" class="text-white hover-opacity-05">おしながき</a>
                    </li>
                    <li class="mb-20px">
                        <a href="index.html#store_section" class="text-white hover-opacity-05">店舗情報</a>
                    </li>
                    <li>
                        <a href="news.html" class="text-white hover-opacity-05">お知らせ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section id="about_section" class="section-content header-disp-point color-666666">
        <div class="row m-0">
            <div class="col-3 pt-3 px-0">
                <h2 class="index-section-ttl vertical mx-auto font-size-26px">
                    <span>
                        居酒屋について
                    </span>
                </h2>
            </div>
            <div class="section-detail col-9 p-relative">
                <h3 class="section-detail-head">
                    長崎でしか味わえないお料理を提供いたします
                </h3>
                <div class="section-detail-body">
                    <p>
                        居酒屋は長崎の新鮮な魚を中心としたお店。<br>
                        長崎の美味しいお魚を多くの人に食べていただきたい<br>
                        という思いからXX年にお店をオープン。<br>
                        居酒屋は長崎の新鮮な魚を中心としたお店。<br>
                        長崎の美味しいお魚を多くの人に食べていただきたい<br>
                        という思いからXX年にお店をオープン。
                    </p>
                </div>
                <div class="section-detail-btn">
                    <a href="<?php echo home_url(); ?>/about" class="section-btn d-inline-block">more</a>
                </div>
                <span class="section-detail-bottom-text p-absolute">ABOUT</span>
            </div>
        </div>
    </section>
    <section class="center-img-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sake2.jpg" class="w-100 h-lg-100vh">
    </section>
    <section id="menu_section" class="section-content color-666666">
        <div class="row m-0">
            <div class="col-3 pt-3 px-0">
                <h2 class="index-section-ttl vertical mx-auto font-size-26px">
                    <span>
                        おしながき
                    </span>
                </h2>
            </div>
            <div class="section-detail col-9 p-relative">
                <h3 class="section-detail-head">
                    長崎でしか味わえないお料理を提供いたします
                </h3>
                <div class="section-detail-body">
                    <p>
                        居酒屋は長崎の新鮮な魚を中心としたお店。<br>
                        長崎の美味しいお魚を多くの人に食べていただきたい<br>
                        という思いからXX年にお店をオープン。<br>
                        居酒屋は長崎の新鮮な魚を中心としたお店。<br>
                        長崎の美味しいお魚を多くの人に食べていただきたい<br>
                        という思いからXX年にお店をオープン。
                    </p>
                </div>
                <div class="section-detail-btn">
                    <a href="<?php echo home_url(); ?>/menu" class="section-btn d-inline-block">more</a>
                </div>
                <span class="section-detail-bottom-text p-absolute">MENU</span>
            </div>
        </div>
    </section>
    <section class="left-img-section">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sushi.jpg" class="w-100 h-lg-100vh">
    </section>
    <section id="store_section" class="section-content color-666666">
        <div class="row m-0">
            <div class="col-3 pt-3 px-0">
                <h2 class="index-section-ttl vertical mx-auto font-size-26px">
                    <span>
                        店舗情報
                    </span>
                </h2>
            </div>
            <div class="section-detail col-9 p-relative">
                <h3 class="section-detail-head">
                    居酒屋
                </h3>
                <div class="section-detail-body">
                    <address>
                        〒643-0000 ～～県～～市～～～～～～～～～～～～<br>
                        012-345-678<br>
                        営業時間 8:30～21:00［L.O. 20:30］<br>
                    </address>
                </div>
                <div class="section-detail-btn">
                    <a href="" class="section-btn d-inline-block">Google map</a>
                </div>
                <span class="section-detail-bottom-text p-absolute">STORE</span>
            </div>
        </div>
    </section>
    <?php if(have_posts()): ?>
    <section id="news-section" class="bg-white row m-0">
        <h3 class="news-section-title col-12 col-md-2 font-size-26px px-0 mb-5 mb-md-0">
            <a href="<?php echo home_url(); ?>/news" class="color-666666 hover-opacity-05">お知らせ</a>
        </h3>
        <ul class="news-list col-12 col-md-10 list-unstyled font-size-18px m-0 px-0">
            <li class="row mx-0">
                <time class="news-list-date col-12 col-md-2 d-inline-block color-666666">2019.11.29</time>
                <span class="col-12 col-md-10 d-inline-block p-relative px-md-4">
                    <a href="<?php echo home_url(); ?>/news"
                        class="color-666666 hover-opacity-05 font-size-16px font-size-md-18px">
                        オープンしました1
                        <span class="news-list-arrow p-absolute">&#8250;</span>
                    </a>
                </span>
            </li>
            <li class="row mx-0">
                <time class="news-list-date col-12 col-md-2 d-inline-block color-666666">2019.11.29</time>
                <span class="col-12 col-md-10 d-inline-block p-relative px-md-4">
                    <a href="<?php echo home_url(); ?>/news"
                        class="color-666666 hover-opacity-05 font-size-16px font-size-md-18px">
                        オープンしました2
                        <span class="news-list-arrow p-absolute">&#8250;</span>
                    </a>
                </span>
            </li>
            <li class="row mx-0">
                <time class="news-list-date col-12 col-md-2 d-inline-block color-666666">2019.11.29</time>
                <span class="col-12 col-md-10 d-inline-block p-relative px-md-4">
                    <a href="<?php echo home_url(); ?>/news"
                        class="color-666666 hover-opacity-05 font-size-16px font-size-md-18px">
                        オープンしました3
                        <span class="news-list-arrow p-absolute">&#8250;</span>
                    </a>
                </span>
            </li>
        </ul>
    </section>
    <?php else: ?>
    <div class="m-0" style="height: 1px;"></div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>