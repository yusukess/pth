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
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "交通",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "建築年月",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "構造",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "階建て",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "総戸数",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "所在地",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "敷地面積",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "建築面積",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "延床面積",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "土地権利",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "用途地域",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "旧事業主",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "施工会社",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "設計会社",
            "value" => "ほげほげほげほげ"
        ],
        [
            "name" => "管理会社",
            "value" => "ほげほげほげほげ"
        ]
    ];
?>
<main id="site-content">
    <?php get_template_part( 'components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']] ); ?>
    <?php get_template_part( 'components/common/breadcrumb', null, ['parent' => [], 'self' => $self] ); ?>
    <section class="summary-section">
        <div class="summary-section_inner">
            <section class="summary-group-section">
                <?php foreach($summary_database as $summary){ ?>
                    <?php get_template_part( 'components/common/key-value', null, ['page' => $self['page'], 'link' => $summary] ); ?>
                <?php } ?>
            </section>
        </div>
    </section>
</main>