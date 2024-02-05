<?php

/**
 * Template Name: 居住者向けリンク集のテンプレート
 */

$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];

$links_database = [
    [
        "id" => "unique-service",
        "heading" => "パークタワー晴海各種サービス",
        "links" => [
            [
                "name" => "コンシェルジュサービス",
                "value" => "営業時間：全日8～20時（休業：12月30日～1月3日）<br>連絡先：居住者LINE公式アカウント参照"
            ],
            [
                "name" => "中央管理室（防災センター）",
                "value" => "連絡先：居住者LINE公式アカウント参照"
            ],
            [
                "name" => "三井のマンションコールセンター",
                "value" => "<a href='https://www.mitsui-kanri.co.jp/contents/connection/hotline/' target='_blank'>三井のマンションコールセンター（ 24時間安心のホットライン） ｜ “つながり”を大切にする ｜ 私たちの「マンション管理」 ｜ 三井不動産レジデンシャルサービス株式会社 (mitsui-kanri.co.jp)</a><br><a href='tel:0120-8656-31'>0120-8656-31（24時間365日対応）</a>
                "
            ],
            [
                "name" => "レジのくらしアプリ",
                "value" => "<a href='https://regi.iecon-app.com/pc/#!/' target='_blank'>レジのくらしアプリ (iecon-app.com)</a>"
            ],
            [
                "name" => "ファンナビ（共用施設予約）",
                "value" => "<a href='https://fun-navi.net/frpc010g.jsp' target='_blank'>Fun Life Navi ログインページ/Fun Life Navi 【ファンナビ】 (fun-navi.net)</a>"
            ],
            [
                "name" => "シャトルバス時刻表",
                "value" => "居住者LINE公式アカウント参照"
            ]
        ]
    ],
    [
        "id" => "infra-service",
        "heading" => "インフラ",
        "links" => [
            [
                "name" => "電気",
                "value" => "NTTアノードエナジー株式会社 <br><a href='tel:0120-33-0057'>0120-33-0057</a>（受付時間：9:00～17:00　※年中無休）<br><a href='https://www.denki-annai.com/mansion/' target='_blank'>https://www.denki-annai.com/mansion/</a>"
            ],
            [
                "name" => "水道",
                "value" => "東京都水道局　お客様センター<br><a href='tel:0570-091-100'>0570-091-100</a>（受付時間：8:30～20:00　※日曜・祝日を除く）<br><a href='https://www.waterworks.metro.tokyo.lg.jp/tetsuduki/madoguchi/center.htm' target='_blank'>https://www.waterworks.metro.tokyo.lg.jp/tetsuduki/madoguchi/center.htm</a>"
            ],
            [
                "name" => "インターネット",
                "value" => "NTT東日本<br><a href='tel:0120-116-116'>0120-116-116</a>（受付時間：9:30～17:00　※年末年始を除く）<br><a href='https://flets.com/customer/contact.html' target='_blank'>https://flets.com/customer/contact.html</a>"
            ],
        ]
    ],
    [
        "id" => "transportation-hp",
        "heading" => "交通機関ウェブサイト",
        "links" => [
            [
                "name" => "東京メトロ",
                "value" => "<a href='https://www.tokyometro.jp/index.html' target='_blank'>東京メトロ (tokyometro.jp)</a>"
            ],
            [
                "name" => "都営バス",
                "value" => "<a href='https://www.kotsu.metro.tokyo.jp/bus/' target='_blank'>都営バス ｜ 東京都交通局 (metro.tokyo.jp)</a><br><a href='https://tobus.jp/blsys/navi' target='_blank'>都バス運行情報サービス ｜ 東京都交通局 (tobus.jp)</a>"
            ],
            [
                "name" => "東京BRT",
                "value" => "<a href='https://tokyo-brt.co.jp/' target='_blank'>TOKYO BRT | 東京BRT(Bus Rapid Transit)の公式サイト (tokyo-brt.co.jp)</a>"
            ],
            [
                "name" => "晴海ライナー",
                "value" => "<a href='https://www.hitachi-gr.com/harumi-liner' target='_blank'>晴海ライナー (hitachi-gr.com)</a>"
            ],
            [
                "name" => "タクシー会社",
                "value" => "<a href='tel:03-5755-2151' target='_blank'>日本交通：03-5755-2151</a><br><a href='tel:03-5530-6001' target='_blank'>KMタクシー：03-5530-6001</a>"
            ]
        ]
    ],
    [
        "id" => "nearby-facilities",
        "heading" => "公共機関・施設",
        "links" => [
            [
                "name" => "中央区役所",
                "value" => "<a href='https://www.city.chuo.lg.jp/' target='_blank'>中央区トップページ (chuo.lg.jp)</a><br><a href='tel:03-3543-0211' target='_blank'>03-3543-0211</a>"
            ],
            [
                "name" => "中央区立月島第三小学校",
                "value" => "<a href='https://www.chuo-tky.ed.jp/~tsuki3-es/' target='_blank'>ホーム - 月島第三小学校 (chuo-tky.ed.jp)</a><br><a href='tel:03-3531-7225' target='_blank'>03-3531-7225</a>"
            ],
            [
                "name" => "中央区立晴海中学校",
                "value" => "<a href='https://www.chuo-tky.ed.jp/~harumi-jh/' target='_blank'>ホーム - 晴海中学校 (chuo-tky.ed.jp)</a><br><a href='tel:03-3531-6308' target='_blank'>03-3531-6308</a>"
            ],
            [
                "name" => "郵便局",
                "value" => "<a href='https://www.kotsu.metro.tokyo.jp/bus/' target='_blank'>晴海トリトンスクエア郵便局 (東京都) - 日本郵政グループ (japanpost.jp)</a><br><a href='https://www.post.japanpost.jp/cgi-shiten_search/shiten.php?id=5594' target='_blank'>晴海郵便局 - 日本郵便 (japanpost.jp)</a>"
            ]
        ]
    ],
];
?>
<main id="site-content">
    <?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    <?php get_template_part('components/common/breadcrumb', null, ['parent' => [], 'self' => $self]); ?>
    <section class="for-residents-section">
        <div class="for-residents-section_inner">
            <?php foreach ($links_database as $group) { ?>
                <section class="for-residents-group-section">
                    <h1 class="for-residents-group_heading"><?php echo ($group['heading']) ?></h1>
                    <div class="for-residents-field-wrapper">
                        <?php foreach ($group['links'] as $link) { ?>
                            <?php get_template_part('components/common/key-value', null, ['page' => $self['page'], 'link' => $link]); ?>
                        <?php } ?>
                    </div>
                </section>
            <?php } ?>
        </div>
    </section>
</main>