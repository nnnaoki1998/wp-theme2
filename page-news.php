<?php get_header(); ?>
<main class="color-666666">
    <section class="news-page-section header-disp-point">
        <div class="news-page-section-inner">
            <div class="news-page-section-head">
                <h1 class="news-page-section-ttl">お知らせ</h1>
            </div>
            <div class="news-page-section-body">
                <?php
                $paged = (int) get_query_var('paged');
                $args = array(
                    'posts_per_page' => get_option('posts_per_page'),
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                <ul class="list-unstyled mb-0">
                    <?php $i = 1; ?>
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <?php $classes = ['news','post-oder-'.$i]; ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
                        <dl class="mb-0">
                            <dt class="news-detail-head font-size-20px">
                                <time datatime="<?php the_time('Y-m-d'); ?>">
                                    <?php echo get_post_time('Y.m.d'); ?>
                                </time>
                                <span><?php the_title(); ?></span>
                                <div class="news-detail-arrow">
                                    <span>
                                        <hr color="#666666" class="news-detail-arrow-part1">
                                        <hr color="#666666" class="news-detail-arrow-part2">
                                        <hr color="#666666" class="news-detail-arrow-part3">
                                    </span>
                                </div>
                            </dt>
                            <dd class="news-detail-body overflow-hidden mb-0 font-weight-normal">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <?php $i++; ?>
                    <?php endwhile; ?>
                </ul>
                <?php else: ?>
                <div class="text-center my-5">
                    <p>記事はありません。</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>