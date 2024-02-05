<?php
$structure_database = [
    [
        "heading" => "免震×連結制振<br class='for-sp'>「DFSハイブリッド」の特長",
        "detail" => "1　様々な地震による揺れを軽減。<br>
                         2　地震による建物の損傷を軽減。<br>
                         3　揺れが早くおさまる安心感があります。<br>
                         4　強風による揺れも軽減。<br>
                         5　低層部から高層部まで全階に安心感があります。<br><br>
                         ＜設計・施工＞<br>
                         大林組",
        "notice" => "DFS（デュアル・フレーム・システム）とは？
                         建物の中央に構築した剛強な心棒と、その外周に柱と梁による柔構造の建物を配置し、この2つを制振装置（オイルダンパー）で連結する大林組独自の連結制振構造です。",
        "image" => "structure-facilities/structure/dfs.jpg",
        "image-width" => "480",
        "image-height" => "326",
        "sub-image" => ""
    ],
    [
        "heading" => "マンションの生命線を支える約72時間使用可能な<br class='for-sp'>非常用発電設備",
        "detail" => "非常用発電設備を2階に有しています。災害時に停電になった際は非常用発電機が作動し、非常用エレベーターや共用部の保安照明、災害防災拠点（2Fキャビンラウンジや1Fオーナーズリビング等）の電気設備などへ電力を供給します。非常用発電設備の備蓄燃料は法定量以上を確保し、3日間の運用スケジュールを策定しています。",
        "notice" => "",
        "image" => "structure-facilities/structure/emergency-power.jpg",
        "image-width" => "480",
        "image-height" => "326",
        "sub-image" => ""
    ],
];
?>

<section class="structure-section" id="structure">
    <?php get_template_part('components/common/wave', null, ['className' => 'is-bottom']); ?>
    <div class="structure-section_inner">
        <div class="structure_information">
            <h2 class="structure_heading">免震×連結制振<br class='for-sp'>「DFSハイブリッド」を採用</h2>
            <p class="structure_detail">パークタワー晴海では、免震構造と制震構造（DFS：デュアル・フレーム・システム／連結制振構造）を併用するハイブリッド構造を採用しています。免震構造だけでは対応できなかった風揺れや長周期地震動による揺れにも対応する安心感の高い構造です。</p>
            <small class="structure_notice">※竣工（2019年）時点で、大林組独自の連結制振構造であるDFS（デュアル・フレーム・システム）に免震構造を組み込んだ構造システム（DFSハイブリッドハイブリッド）の初適用物件。</small>
        </div>
        <?php foreach ($structure_database as $structure) { ?>
            <?php get_template_part('components/common/point', null, ['point' => $structure, 'page' => $args['page']]); ?>
        <?php } ?>
    </div>
</section>