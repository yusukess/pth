<?php
$disaster_database = [
    "disaster" => [
        "heading" => "避難時や災害発生後まで配慮した防災対策。",
        "title" => "ワンランク上の安心を。備えも充実",
        "detail" => "備えは構造だけにあらず。非常用発電機システムの他、24時間有人管理の防災センター、各階フロアごとにある備蓄倉庫、地下にある全体倉庫には水やトイレ、非常食やヘルメットといった防災グッズを用意。中央区の備品倉庫もエリア内に。屋上には有事の際に活用できるヘリポート設備も。",
        "photos" => [
            [
                "id" => "01",
                "caption" => "キャプション"
            ],
            [
                "id" => "02",
                "caption" => "キャプション"
            ],
            [
                "id" => "03",
                "caption" => "キャプション"
            ],
            [
                "id" => "04",
                "caption" => "キャプション"
            ],
            [
                "id" => "05",
                "caption" => "キャプション"
            ],
            [
                "id" => "06",
                "caption" => "キャプション"
            ],
            [
                "id" => "07",
                "caption" => "キャプション"
            ],
        ]
    ],
];
?>

<section class="photo-gallery-section">
    <div class="photo-gallery-section_inner">
        <div class="disaster-prevention_information">
            <h2 class="disaster-prevention_heading">避難時や災害発生後まで配慮した<br class='for-sp'>防災対策。</h2>
            <p class="disaster-prevention_detail">基本的なライフラインの確保など、災害の時も変わりない日常を目指して、<br class='for-pc'>様々な視点から安心を支える取り組みを行っています。</p>
        </div>
        <?php foreach ($disaster_database as $area => $section) { ?>
            <section class="area-group-section">
                <div class="area-group-section_inner">
                    <?php get_template_part('components/common/slider-gallery', null, ['page' => $args['page'], 'section' => 'photo-gallery', 'area' => $area, 'photos' => $section['photos']]) ?>
                    <div class="photo-gallery_information">
                        <h3 class="photo-gallery_title"><?php echo ($section['title']) ?></h3>
                        <p class="photo-gallery_detail"><?php echo ($section['detail']) ?></p>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>
</section>