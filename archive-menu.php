<?php
function outputMenu($menu_category) {
    $menusCount = 0;
    if (have_posts()):
        while (have_posts()):the_post();
            if (get_field('menu_category') == $menu_category):
                $menusCount++;
            endif;
        endwhile;
    endif;
    if (have_posts()):
        $i = 1;
        ?>
<div class="row mx-0">
    <ul class="price-list-left col-12 col-md-6 list-unstyled">
        <?php
        while (have_posts()):the_post();
            if (get_field('menu_category') == $menu_category):
                ?>
        <li>
            <dl>
                <dt><?php the_field('menu_name'); ?></dt>
                <dd><?php the_field('menu_price'); ?>円</dd>
            </dl>
        </li>
        <?php
                if ($i >= $menusCount / 2):
                    ?>
    </ul>
    <ul class="price-list-right col-12 col-md-6 list-unstyled">
        <?php
                    $i -= $menusCount;
                endif;
                $i++;
            endif;
        endwhile;
        ?>
    </ul>
</div>
<?php
    endif;
}
?>

<?php get_header(); ?>
<main class="color-666666">
    <div id="menu-top-caption" class="header-disp-point">
    </div>
    <section class="menu-1st-section">
        <div class="menu-1st-section-inner">
            <div>
                <div>
                    <h2 class="menu-1st-section-detail-head">旬のお魚たちをお楽しみください。</h2>
                    <div>
                        <p class="font-weight-normal m-0">
                            季節ごとに変わるメニューをお楽しみください。<br>
                            肉や野菜などの魚料理以外のものも多く準備しております。
                        </p>
                    </div>
                </div>
                <div class="menu-section-img-container">
                    <ul class="menu-section-img list-unstyled">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food2.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/sushi.jpg"></li>
                    </ul>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">刺身</h3>
                    <?php outputMenu('刺身'); ?>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">肉料理</h3>
                    <?php outputMenu('肉料理'); ?>
                </div>
                <div class="menu-section-img-container">
                    <ul class="menu-section-img list-unstyled">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food2.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/sushi.jpg"></li>
                    </ul>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">鉄板料理</h3>
                    <?php outputMenu('鉄板料理'); ?>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">揚げ物</h3>
                    <?php outputMenu('揚げ物'); ?>
                </div>
            </div>
    </section>
    <div class="large-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/sake2.jpg" class="w-100">
    </div>
    <section class="menu-2nd-section">
        <div class="menu-2nd-section-inner">
            <div>
                <div class="menu-section-img-container">
                    <ul class="menu-section-img list-unstyled">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food2.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/sushi.jpg"></li>
                    </ul>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">鍋料理</h3>
                    <?php outputMenu('鍋料理'); ?>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">サイドメニュー</h3>
                    <?php outputMenu('サイドメニュー'); ?>
                </div>
                <div class="menu-section-img-container">
                    <ul class="menu-section-img list-unstyled">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/food2.jpg"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/sushi.jpg"></li>
                    </ul>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">お酒</h3>
                    <?php outputMenu('お酒'); ?>
                </div>
                <div class="price-container">
                    <h3 class="price-ttl">ソフトドリンク</h3>
                    <?php outputMenu('ソフトドリンク'); ?>
                </div>
            </div>
            <p class="font-weight-normal">◎表記の金額はすべて税抜価格です</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>