<?php
    $self = [
        'page' => get_post(get_the_ID())->post_name,
        'title' => get_the_title(),
    ];

    $bus_database = [
        [
            "name" => "銀座4分(3分)：東京メトロ有楽町線利用で銀座一丁目駅下車。",
            "value" => ""
        ],
        [
            "name" => "汐留6分(6分)：都営大江戸線利用。 ",
            "value" => ""
        ],
        [
            "name" => "東京6分(7分)：東京メトロ有楽町線利用。「有楽町」よりJR山手線乗り換え。",
            "value" => ""
        ],
        [
            "name" => "六本木15分(16分)：都営大江戸線利用。",
            "value" => ""
        ],
        [
            "name" => "お台場18分(18分)：東京メトロ有楽町線利用。「豊洲」よりゆりかもめ乗り換え「台場」下車。",
            "value" => ""
        ],
    ];

    $transportation_database = [
        [
            "name" => "銀座一丁目駅4分（3分）：東京メトロ有楽町線利用",
            "value" => ""
        ],
        [
            "name" => "有楽町駅5分（5分）：東京メトロ有楽町線利用。 ",
            "value" => ""
        ],
        [
            "name" => "新宿駅25分（26分）：都営大江戸線利用。",
            "value" => ""
        ],
        [
            "name" => "池袋駅24分（25分）：東京メトロ有楽町線利用。",
            "value" => ""
        ],
        [
            "name" => "東京駅6分（7分）：東京メトロ有楽町線「有楽町」駅にて乗り換えてJR山手線利用。",
            "value" => ""
        ],
        [
            "name" => "品川駅12分（16分）：東京メトロ有楽町線「有楽町」駅にて乗り換えてJR山手線利用。",
            "value" => ""
        ],
        [
            "name" => "汐留駅6分（6分）：都営大江戸線利用。",
            "value" => ""
        ],
        [
            "name" => "六本木駅15分（16分）：都営大江戸線利用。",
            "value" => ""
        ],
        [
            "name" => "青山一丁目駅18分（19分）：都営大江戸線利用。",
            "value" => ""
        ],
    ];
?>

<section class="access-section">
    <div class="access-section_inner">
        <div class="access_bus">
            <?php echo(default_image( array('access/bus-map.png'), '440', '298', '', '' )); ?>
            <h2 class="access_bus_heading">地下鉄だけじゃない、バスも便利で<br>多方面へのアクセスが充実</h2>
            <p class="access_bus_detail">最寄り駅の地下鉄は東京メトロ有楽町線・都営大江戸線の月島駅で徒歩12分。マンション発のシャトルバスは月島と銀座の2方面で、約20分/1本ほど。その他、マンション近くで発着する日本橋、東京、有楽町、銀座方面に向かう晴海ライナーや虎ノ門、新橋方面に向かう東京BRT、東京方面に向かう都バスも。</p>
        </div>
        <div class="access_stations">
            <?php foreach($bus_database as $summary){ ?>
                <?php get_template_part( 'components/common/key-value', null, ['page' => $self['page'], 'link' => $summary] ); ?>
            <?php } ?>
        </div>
        <h2 class="access_heading">装飾テキスト1</h2>
        <?php echo(default_image( array('access/shuttle-bus.png'), '1000', '453', '', '' )); ?>
        <?php echo(default_image( array('access/subway.png'), '1000', '345', '', '' )); ?>
        <p class="access_detail">所要時間は日中平常時のもので乗換え待ち時間は含みません、また時間帯により多少異なります。</p>
        <div class="access_stations">
            <?php foreach($transportation_database as $summary){ ?>
                <?php get_template_part( 'components/common/key-value', null, ['page' => $self['page'], 'link' => $summary] ); ?>
            <?php } ?>
        </div>
        <small class="access_notice">
            銀座一丁目駅、有楽町駅、池袋駅へは東京メトロ有楽町線利用。 <br>
            東京駅 、品川駅へは、東京メトロ有楽町線「有楽町」駅にて乗り換えてJR山手線利用。 <br>
            汐留駅 、六本木駅 、青山一丁目駅、新宿駅へは都営大江戸線利用。<br>
            （）内は通勤時の分数。
        </small>
        <div class="access_google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.826308707932!2d139.78469597728593!3d35.656650772595334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018899dc22bec5d%3A0xcea40737217585b7!2z44OR44O844Kv44K_44Ov44O85pm05rW3!5e0!3m2!1sja!2sjp!4v1699718751347!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="https://www.google.co.jp/maps/place/%E3%83%91%E3%83%BC%E3%82%AF%E3%82%BF%E3%83%AF%E3%83%BC%E6%99%B4%E6%B5%B7/@35.6566508,139.784696,17z/data=!3m1!4b1!4m6!3m5!1s0x6018899dc22bec5d:0xcea40737217585b7!8m2!3d35.6566508!4d139.7872709!16s%2Fg%2F11dywvjms6?hl=ja&entry=ttu" class="access_google-map_more" target="_blank">＞＞大きい地図で見る</a>
        </div>
        <div class="access_google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1700323798232!6m8!1m7!1sCAoSLEFGMVFpcE1raGd2UFpMWENnQmVxUC1mTmc4OVFpN3RtdXFkamVHWU0yVHhZ!2m2!1d35.656457!2d139.787272!3f0!4f20!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="https://www.google.com/maps/place/%E3%83%91%E3%83%BC%E3%82%AF%E3%82%BF%E3%83%AF%E3%83%BC%E6%99%B4%E6%B5%B7/@35.656457,139.787272,3a,75y,110t/data=!3m8!1e1!3m6!1sAF1QipMkhgvPZLXCgBeqP-fNg89Qi7tmuqdjeGYM2TxY!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMkhgvPZLXCgBeqP-fNg89Qi7tmuqdjeGYM2TxY%3Dw224-h298-k-no-pi-20-ya0-ro0-fo100!7i5760!8i2880!4m9!3m8!1s0x6018899dc22bec5d:0xcea40737217585b7!8m2!3d35.6566508!4d139.7872709!10e5!14m1!1BCgIgARICCAI!16s%2Fg%2F11dywvjms6?hl=ja&entry=ttu" class="access_google-map_more" target="_blank">＞＞拡大して見る</a>
        </div>
    </div>
</section>