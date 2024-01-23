<?php
// TODO：記事データ取得できるようになったら以下のダミーデータの部分を差し替える
$news_database = [
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
    [
        "id" => "sample-article",
        "post-date" => "2023月1月1日（日）",
        "title" => "記事タイトルがここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
        "detail" => "記事の頭の文章がここに入ります。最大で3行分表示され、溢れる分は「…」で省略されます。あいうえおかきくけこ",
    ],
];
?>

<section class="recent-news-section">
    <div class="recent-news-section_inner">
        <h2 class="recent-news_heading">News<small>パークタワー晴海のからのお知らせ</small></h2>
        <section class="recent-news_slider inview_item" data-intersected="false">
            <div class="slider_card-list slider-multiple">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php echo (get_template_part(
                            'components/common/news-card',
                            null,
                            [
                                "thumbnail-url" => catch_that_image(),
                                "post-date" => get_the_date(),
                                "title" => get_the_title(),
                                "detail" => get_the_excerpt(),
                                "link" => get_the_permalink(),
                                "view" => 'card-view'
                            ]
                        )); ?>
                <?php endwhile;
                endif; ?>
            </div>
        </section>
    </div>
</section>