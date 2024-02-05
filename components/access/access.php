<?php
$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];

$bus_database = [
    [
        "name" => "銀座（銀座一丁目）",
        "value" => "東京メトロ有楽町線利用、直通で約5分"
    ],
    [
        "name" => "有楽町",
        "value" => "東京メトロ有楽町線利用、直通で約6分"
    ],
    [
        "name" => "汐留",
        "value" => "都営大江戸線利用、直通で約6分"
    ],
    [
        "name" => "東京",
        "value" => "東京メトロ有楽町線「有楽町駅」からJR山手線へ乗り換え"
    ],
    [
        "name" => "六本木",
        "value" => "都営大江戸線利用、直通で約15分"
    ],
    [
        "name" => "品川",
        "value" => "東京メトロ有楽町線「有楽町駅」からJR山手線へ乗り換え"
    ],
    [
        "name" => "新宿",
        "value" => "都営大江戸線利用、直通で約25分"
    ],
    [
        "name" => "池袋",
        "value" => "東京メトロ有楽町線利用、直通で約25分"
    ],
];

$transportation_database = [
    [
        "name" => "晴海ライナー",
        "value" => "マンション敷地前「晴海2丁目北」バス停より、東銀座駅へ9分、有楽町駅へ16分、東京駅八重洲北口へ23分で運行<br><a href='https://www.hitachi-gr.com/harumi-liner' target='_blank'>https://www.hitachi-gr.com/harumi-liner</a>"
    ],
    [
        "name" => "東京BRT",
        "value" => "「晴海BRTターミナル」バス停より、新橋へ12分、虎ノ門ヒルズに約20分で運行<br><a href='https://tokyo-brt.co.jp/' target='_blank'>https://tokyo-brt.co.jp/</a>"
    ],
    [
        "name" => "都営バス",
        "value" => "→「晴海1丁目」バス停より、業10系統「新橋」行きで、築地・東銀座・銀座経由、新橋まで約20分で運行<br>
        →「晴海1丁目」バス停より、東15系統「東京駅八重洲南口」行きで、勝どき・聖路加病院・八丁堀経由、東京駅八重洲口へ約30分で運行<br>
        →「新月島公園」バス停より、東16系統「東京駅八重洲南口」行きで、月島・八丁堀経由、東京駅八重洲口へ約20分で運行<br>
        →「晴海3丁目」バス停より、都03・都05-1・都05-2系統「東京駅丸の内南口」行きで、築地・東銀座・銀座・有楽町経由、東京駅丸の内南口へ約25分で運行<br>
        <a href='https://tobus.jp/sp/blsys/top/time' target='blank'>時刻表 ｜都バス 運行情報サービス (tobus.jp) </a>"
    ],
    [
        "name" => "リムジンバス",
        "value" => "豊洲駅からリムジンバス（東京空港交通）で羽田空港まで約15分、成田空港へ約60分でアクセス<br><a href='https://www.limousinebus.co.jp/guide/timetable/' target='_blank'>リムジンバス時刻表 | リムジンバスの東京空港交通 (limousinebus.co.jp)</a>"
    ],

];
?>

<section class="access-section">

    <div class="access-section_inner">
        <div class="access-sub-section">
            <h2 class="access_heading">空と海と未来に開かれた都心。中央区・晴海。</h2>
            <div class="access_detail_wrapper">
                <p class="access_detail">銀座約2.5km圏に位置するパークタワー晴海。空と海を身近に感じる環境にありながら、<br>
                    都市の利便性を使いこなし、加速度的に開発が進む湾岸エリアの賑わいも楽しめる、別世界の都心です。</p>
            </div>
            <div class="access_google-map_wrapper">
                <div>
                    <div class="access_google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.826308707932!2d139.78469597728593!3d35.656650772595334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018899dc22bec5d%3A0xcea40737217585b7!2z44OR44O844Kv44K_44Ov44O85pm05rW3!5e0!3m2!1sja!2sjp!4v1699718751347!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="https://www.google.co.jp/maps/place/%E3%83%91%E3%83%BC%E3%82%AF%E3%82%BF%E3%83%AF%E3%83%BC%E6%99%B4%E6%B5%B7/@35.6566508,139.784696,17z/data=!3m1!4b1!4m6!3m5!1s0x6018899dc22bec5d:0xcea40737217585b7!8m2!3d35.6566508!4d139.7872709!16s%2Fg%2F11dywvjms6?hl=ja&entry=ttu" class="access_google-map_more" target="_blank">＞＞大きい地図で見る</a>
                </div>
                <div>
                    <div class="access_google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1700323798232!6m8!1m7!1sCAoSLEFGMVFpcE1raGd2UFpMWENnQmVxUC1mTmc4OVFpN3RtdXFkamVHWU0yVHhZ!2m2!1d35.656457!2d139.787272!3f0!4f20!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/place/%E3%83%91%E3%83%BC%E3%82%AF%E3%82%BF%E3%83%AF%E3%83%BC%E6%99%B4%E6%B5%B7/@35.656457,139.787272,3a,75y,110t/data=!3m8!1e1!3m6!1sAF1QipMkhgvPZLXCgBeqP-fNg89Qi7tmuqdjeGYM2TxY!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMkhgvPZLXCgBeqP-fNg89Qi7tmuqdjeGYM2TxY%3Dw224-h298-k-no-pi-20-ya0-ro0-fo100!7i5760!8i2880!4m9!3m8!1s0x6018899dc22bec5d:0xcea40737217585b7!8m2!3d35.6566508!4d139.7872709!10e5!14m1!1BCgIgARICCAI!16s%2Fg%2F11dywvjms6?hl=ja&entry=ttu" class="access_google-map_more" target="_blank">＞＞拡大して見る</a>
                </div>

            </div>
        </div>

        <div class="access-sub-section">
            <div class="access_heading_wrapper">
                <h2 class="access_heading">都心を使いこなす、多彩なアクセス</h2>
                <h3 class="access_sub_heading">東京メトロ有楽町線・都営大江戸線『月島駅』利用。</h3>
            </div>

            <?php echo (default_image(array('access/location_access.jpg'), '960', '438', '地図', 'local_map')); ?>
            <div class="access_stations">
                <?php foreach ($bus_database as $summary) { ?>
                    <?php get_template_part('components/common/key-value', null, ['page' => $self['page'], 'link' => $summary]); ?>
                <?php } ?>
            </div>
            <p class="access_notice">※2024年1月時点。所要時間は日中平常時（通勤時）のもので、乗り換え待ち時間は含みません。時間帯により異なりますので、詳細は鉄道各社のホームページ等をご確認ください。</p>
        </div>
    </div>
    <?php get_template_part('components/common/wave', null, ['className' => 'bg-white is-bottom']); ?>
</section>

<section class="access-bus-section">
    <div class="access-section_inner">
        <h2 class="access_heading">地下鉄だけじゃない<br>
            バスも便利で多方面へのアクセスが充実</h2>
        <div class="access_transportation">
            <?php foreach ($transportation_database as $summary) { ?>
                <?php get_template_part('components/common/key-value', null, ['page' => $self['page'], 'link' => $summary]); ?>
            <?php } ?>
            <p class="access_notice">※2024年1月時点。詳細は各社のホームページ等をご確認ください。</p>
        </div>
        <div class="bus-map-box">
            <div class="bus-map_text">
                <h2 class="bus-map_heading">居住者専用シャトルバス運行</h2>
                <div class="bus-map_sub">
                    <?php echo (default_image(array('access/bus_info_logo.jpg'), '107', '107', '画像', 'image')); ?>
                    <h3 class="access_sub_heading">月島へ、東銀座へ、<br>快適にダイレクトアクセス。</h3>
                </div>
                <p>平日の朝・夕夜にパークタワー晴海専用のシャトルバスを運行しています。<br>
                    朝送迎は、マンション車寄せから最寄りの月島駅停留所まで5分、東銀座駅停留所まで約15分の直通便で、居住者の出勤や通学を支えています。<br>
                    夕送迎は、東銀座6丁目停留所→月島駅停留所→パークタワー晴海の経由便を運行しています。<br>
                    <a href="" target="_blank">＞＞時刻表はこちら</a>
                </p>

            </div>
            <div class="bus-map_image"><?php echo (default_image(array('access/bus_info.jpg'), '460', '407', '地図', 'map')); ?></div>
        </div>
    </div>

    <div class="access-section_inner">
        <h2 class="access_heading">自動車でのアクセスも抜群</h2>
        <ul class="access-car">
            <li>タクシーで銀座、東京駅などから10～15分程度</li>
            <li>首都高速 10号線「晴海」「豊洲」出入口が最寄り。湾岸線経由で羽田空港まで15分程度、成田空港まで1時間程度、横浜まで30分程度</li>
            <li>首都高速 C1都心環状線「汐留」「銀座」「新富町」「京橋」各出入口から10分程度</li>
        </ul>
    </div>
    </div>
</section>

<section class="access-familiar-section">
    <?php get_template_part('components/common/wave', null, ['className' => 'is-inverted is-top']); ?>
    <div class="access-section_inner">
        <h2 class="access_heading">日常を豊かに彩る大型商業施設が身近に</h2>
        <?php echo (default_image(array('access/familiar_spot_img01.jpg'), '1000', '711', '施設の画像', 'image for-pc')); ?>
        <?php echo (default_image(array('access/familiar_spot_img06.jpg'), '1000', '711', '施設の画像', 'image for-sp')); ?>
    </div>
</section>