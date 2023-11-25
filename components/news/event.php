<?php
$event_database = [
    "tanabata" => [
        "heading" => "七夕",
        "title" => "想い馳せた短冊に、願いを込めて夜空に祈りをささげる日。",
        "detail" => "七夕のイベントでは、願いを書きしたためる色とりどりの短冊をご用意。お住まいの方に短冊に願いを込めて書いてもらった短冊は、エントランスにて笹に掛けて飾りました。さまざまな願いが込められた短冊は、神社へ奉納いたしました。",
        "photos" => [
            [
                "id" => "tanabata01",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "tanabata02",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "tanabata03",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "tanabata04",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "tanabata05",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "tanabata06",
                "caption" => "キャプションテキスト"
            ],
        ]
    ],
    "halloween" => [
        "heading" => "ハロウィン",
        "title" => "アミューズメントパークさながらの飾りつけで甘い魔法で笑顔を届けるハロウィンを",
        "detail" => "グランデッキ・ギャラリーエントランスに、まるでアミューズメントパークのようなカボチャの飾りをご用意。夜には光るカボチャも…！思わず「トリックオアトリート！」と言いたくなるワクワクしたイベントとなりました。",
        "photos" => [
            [
                "id" => "halloween01",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "halloween02",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "halloween03",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "halloween04",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "halloween05",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "halloween06",
                "caption" => "キャプションテキスト"
            ],

        ]
    ],
    "illumination" => [
        "heading" => "イルミネーション",
        "title" => "パークタワー晴海を、くじらが泳ぐ海の青で囲む幻想的な光に包まれ、幸せなひとときを―。",
        "detail" => "「晴海の冬の風物詩に育てていきたい―。」そんな想いから、管理組合主体で取り組みが始まった、パークタワー晴海の外構イルミネーション。外構をぐるりと囲むように、青を基調としたイルミネーションがマンションを幻想的に彩ります。エントランスホールでは、クリスマスツリーの飾りつけも。",
        "photos" => [
            [
                "id" => "illumination01",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination02",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination03",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination04",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination05",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination06",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination07",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination08",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination09",
                "caption" => "キャプションテキスト"
            ],
            [
                "id" => "illumination10",
                "caption" => "キャプションテキスト"
            ],

        ]
    ],
];
?>

<section class="event-section">
    <div class="event-section_inner">
        <p class="event-message">お住まいの方の心を<br class="for-sp">もっと豊かに彩りたい―。<br>
            管理組合では、<br class="for-sp">さまざまなイベントを<br class="for-sp">企画・実施し、<br>
            季節を楽しむ豊かな人生の<br class="for-sp">ワクワクにスパイスを<br class="for-sp">お届けします。<br>
        </p>
        <?php foreach ($event_database as $event => $section) { ?>
            <section class="event-group-section">
                <div class="event-group-section_inner">
                    <h2 class="event_heading"><?php echo ($section['heading']) ?></h2>
                    <?php get_template_part('components/common/slider-gallery', null, ['page' => $args['page'], 'section' => 'event', 'area' => $event, 'photos' => $section['photos']]) ?>
                    <div class="event_information">
                        <h3 class="event_title"><?php echo ($section['title']) ?></h3>
                        <p class="event_detail"><?php echo ($section['detail']) ?></p>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>
</section>