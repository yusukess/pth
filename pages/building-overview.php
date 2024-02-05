<?php

/**
 * Template Name: 建物概要のテンプレート
 */

$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];

$summary_database = [
    [
        "name" => "所在地",
        "value" => "東京都中央区晴海2丁目2番42号"
    ],
    [
        "name" => "交通",
        "value" => "東京メトロ有楽町線「月島」駅　徒歩12分<br>東京メトロ有楽町線「豊洲」駅　徒歩15分<br>都営地下鉄大江戸線「勝どき」駅　徒歩15分"
    ],
    [
        "name" => "建築年月",
        "value" => "2019年2月"
    ],
    [
        "name" => "構造・階数",
        "value" => "鉄筋コンクリート造（RC）地上48階地下1階"
    ],
    [
        "name" => "総戸数",
        "value" => "1076戸"
    ],
    [
        "name" => "敷地面積",
        "value" => "19,161.72m&sup2;"
    ],
    [
        "name" => "建築面積",
        "value" => "5,110.66m&sup2;"
    ],
    [
        "name" => "延床面積",
        "value" => "120,790.75m&sup2;"
    ],
    [
        "name" => "土地権利",
        "value" => "所有権"
    ],
    [
        "name" => "用途地域",
        "value" => "準工業地域"
    ],
    [
        "name" => "駐車場",
        "value" => "481台（タワー機械式480台、平置き1台）"
    ],
    [
        "name" => "タワー機械式<br>の仕様",
        "value" => "◎種別……（台数/全長/全幅/全高/最大重量）<br><br>ハイルーフEV……24台/5,300mm/2,050mm/2,000mm/2,500kg<br>ハイルーフ……48台/5,300mm/2,050mm/2,000mm/2,500kg<br>ミドルルーフ……192台/5,300mm/2,050mm/1,800mm/2,300kg<br>ノーマルルーフ……216台/5,300mm/2,050mm/1,550mm/2,300kg<br><br>
        <span>他に来客用駐車場6台、管理用5台、洗車場1区画あり</span><span>敷地内にEV充電器2台あり</span>"
    ],
    [
        "name" => "駐輪場",
        "value" => "2195台<span>他に電動レンタサイクル30台あり</span>"
    ],
    [
        "name" => "バイク置場",
        "value" => "34台"
    ],
    [
        "name" => "設計会社<br>施工会社",
        "value" => "株式会社大林組"
    ],
    [
        "name" => "デザイン監修",
        "value" => "光井純＆アソシエーツ建築設計事務所<span>外観、インテリア共用部、照明計画</span>"
    ],
    [
        "name" => "外構デザイン",
        "value" => "株式会社オリエンタルランド"
    ],
    [
        "name" => "管理形態",
        "value" => "三井不動産レジデンシャルサービス株式会社に委託（常駐管理）"
    ]
];
?>
<main id="site-content">
    <?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    <?php get_template_part('components/common/breadcrumb', null, ['parent' => [], 'self' => $self]); ?>
    <section class="building-overview-section">
        <div class="building-overview-section_inner">
            <section class="building-overview-group-section">
                <?php foreach ($summary_database as $summary) { ?>
                    <?php get_template_part('components/common/key-value', null, ['page' => $self['page'], 'link' => $summary]); ?>
                <?php } ?>
            </section>
        </div>
    </section>
</main>