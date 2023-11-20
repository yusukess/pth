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
            "heading" => "マンション固有サービス",
            "links" => [
                [
                    "name" => "コンシェルジュサービス",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "防災センター",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "三井コールセンター",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "レジのくらしアプリ",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "シャトルバス時刻表",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "キッチンカーメニュー",
                    "value" => "ほげほげほげほげ"
                ]
            ]
        ],
        [
            "id" => "transportation-hp",
            "heading" => "交通機関HPへのアクセス",
            "links" => [
                [
                    "name" => "東京メトロ",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "都営バス",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "東京BRT",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "晴海ライナー",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "タクシー会社",
                    "value" => "ほげほげほげほげ"
                ]
            ]
        ],
        [
            "id" => "nearby-facilities",
            "heading" => "近隣施設",
            "links" => [
                [
                    "name" => "行政施設",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "郵便局",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "学校",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "商業施設",
                    "value" => "ほげほげほげほげ"
                ]
            ]
        ],
        [
            "id" => "other",
            "heading" => "その他",
            "links" => [
                [
                    "name" => "項目名",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "項目名",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "項目名",
                    "value" => "ほげほげほげほげ"
                ],
                [
                    "name" => "項目名",
                    "value" => "ほげほげほげほげ"
                ]
            ]
        ],
    ];
?>
<main id="site-content">
    <?php get_template_part( 'components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']] ); ?>
    <?php get_template_part( 'components/common/breadcrumb', null, ['parent' => [], 'self' => $self] ); ?>
    <section class="links-section">
        <div class="links-section_inner">
            <?php foreach($links_database as $group){ ?>
                <section class="links-group-section">
                    <h2 class="links-group_heading"><?php echo($group['heading']) ?></h2>
                    <?php foreach($group['links'] as $link){ ?>
                        <?php get_template_part( 'components/common/key-value', null, ['page' => $self['page'], 'link' => $link] ); ?>
                    <?php } ?>
                </section>
            <?php } ?>
        </div>
    </section>
</main>