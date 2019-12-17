$(function () {
    // ヘッダー 現在いるページにアンダーラインを付加
    var nav_link = ['about', 'menu', 'news'];
    for (var i = 0; i < nav_link.length; i++) {
        var linkPage = $('.nav-link-' + nav_link[i]).attr('href') + '/';
        if (location.pathname.length > 3 &&
            linkPage.substr(-location.pathname.length) == location.pathname) {
            $('.nav-link-' + nav_link[i]).addClass('current');
        }
    }

    // メニューボタン ナビメニューの開閉
    $('.nav-open-bar').click(function () {
        $('.bar-upper-line').toggleClass('bar-upper-line-open');
        $('.bar-under-line').toggleClass('bar-under-line-open');
        $('.header-nav-list').slideToggle();
    });

    // ヘッダーの表示、非表示
    function headerOpnCls() {
        if ($(this).scrollTop() >= $('.header-disp-point').offset().top) {
            $('header').addClass('header-disp');
        } else {
            $('header').removeClass('header-disp');
        }
    }
    headerOpnCls();
    $(window).scroll(function () {
        headerOpnCls();
    });

    console.log($('header').offset().top);

    // bgSwitcher
    $('#top_caption').bgSwitcher({
        images: ['https://sample.sntsz20.com/wp-content/themes/izakaya-theme2/img/food.jpg',
            'https://sample.sntsz20.com/wp-content/themes/izakaya-theme2/img/sashimi.jpg',
            'https://sample.sntsz20.com/wp-content/themes/izakaya-theme2/img/sushi.jpg'], // 切替背景画像を指定
        interval: 5000, // 背景画像を切り替える間隔を指定 3000=3秒
        loop: true, // 切り替えを繰り返すか指定 true=繰り返す　false=繰り返さない
        shuffle: false, // 背景画像の順番をシャッフルするか指定 true=する　false=しない
        effect: "fade", // エフェクトの種類をfade,blind,clip,slide,drop,hideから指定
        duration: 1000, // エフェクトの時間を指定します。
        easing: "swing" // エフェクトのイージングをlinear,swingから指定
    });

    // 高さ調整
    function height_adjuctment(outer, inner, mgn) {
        var inH = $(inner).height();
        inH += mgn;
        if (window.innerHeight <= inH) {
            $(outer).height(inH);
        } else {
            $(outer).css('height', '');
        }
    }
    var target_adjuctment = [
        ['#top_caption', '#top_caption_inner', 180]
    ];
    for (var i = 0; i < target_adjuctment.length; i++) {
        height_adjuctment(target_adjuctment[i][0], target_adjuctment[i][1], target_adjuctment[i][2]);
    }
    $(window).resize(function () {
        for (var i = 0; i < target_adjuctment.length; i++) {
            height_adjuctment(target_adjuctment[i][0], target_adjuctment[i][1], target_adjuctment[i][2]);
        }
    });

    // .large-img内の画像の縦横比を指定
    $('.large-img img').height($('.large-img img').width() * 0.60);
    $(window).resize(function () {
        $('.large-img img').height($('.large-img img').width() * 0.60);
    });

    // .menu-section-img内の画像の縦横比を指定
    $('.menu-section-img li').height($('.menu-section-img li').width() * 0.75);
    $(window).resize(function () {
        $('.menu-section-img li').height($('.menu-section-img li').width() * 0.75);
    });

    // お知らせの内容の開閉
    var post_num = 1;
    while ($('.post-oder-' + post_num).length) {
        (function (post_num) {
            $('.post-oder-' + post_num + ' .news-detail-head').click(function (event) {
                for (var i = 1; i <= 3; i++) {
                    $('.post-oder-' + post_num + ' .news-detail-arrow-part' + i).toggleClass('news-detail-arrow-part' + i + '-open');
                }
                $('.post-oder-' + post_num + ' .news-detail-body').slideToggle(300);
            });
        }(post_num));
        post_num++;
    }
});