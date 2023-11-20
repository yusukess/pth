<?php
    $disaster_prevention_database = [
        [
            "heading" => "共助活動に必要な備品を準備する <br class='for-sp'>防災備蓄倉庫",
            "detail" => "防災備品をお収納した防災備蓄倉庫を、2階から上の各階に設置しています。<br class='for-pc'>
                         この防災備品は共助に必要な備品を中心に取り揃えています。",
            "notice" => "※内外部のインフラ状況等により使用できない場合があります。",
            "image" => "disaster-prevention/disaster-prevention/stockpile.jpg",
            "image-width" => "308",
            "image-height" => "208",
            "sub-image" => ""
        ],
        [
            "heading" => "約72時間使用可能 <br class='for-sp'>非常用発電設備",
            "detail" => "災害時に停電になった際は非常用発電機が作動し、非常用エレベーターや共用部の保安照明、災害防災拠点の電気設備などへ電力を供給します。非常用発電設備の備蓄燃料は法定量以上を確保し、3日間の運用スケジュールを策定します。",
            "notice" => "",
            "image" => "disaster-prevention/disaster-prevention/emergency-power.jpg",
            "image-width" => "308",
            "image-height" => "208",
            "sub-image" => ""
        ],
        [
            "heading" => "災害時の避難を安全に誘導する <br class='for-sp'>管制運転付エレベーター",
            "detail" => "エレベーターには地震管制装置と火災管制装置（※1）を装備。また、停電時には自家発電機により非常運転（※2）を行います。<br class='for-pc'>
                         更に天井の停電灯が点灯するとともに、停電時でも作動するインターホンで外部と連絡をとることができます。<br class='for-pc'>
                         また、当マンションでは、壊れにくく復旧しやすい耐震クラスS仕様の非常用エレベーターを導入しています。",
            "notice" => "※エレベーターの走行に支障があると感知した場合は、非常停止します。安全上ドアが開かない場合があります。<br>
                         ※1）非常用エレベーターには火災管制運転はありません。<br>
                         ※２）低層用、中層用、高層用、各2台のみ。",
            "image" => "disaster-prevention/disaster-prevention/elevator.png",
            "image-width" => "308",
            "image-height" => "420",
            "sub-image" => "disaster-prevention/disaster-prevention/emergency-driving-function.png"
        ],
        [
            "heading" => "ガラスの飛び散りによるケガを防ぐ <br class='for-sp'>安全に配慮した共用部ガラス",
            "detail" => "エントランスホールには、衝撃に強く割れにくい合わせガラスまたは強化ガラスを採用しています。万が一割れても、あわせガラスは破片が飛びにくく、強化ガラスは破片が鋭利にならないので、大きなケガが少なくなります。",
            "notice" => "※画像は強化ガラスが割れた場合の参考写真",
            "image" => "disaster-prevention/disaster-prevention/glass.jpg",
            "image-width" => "308",
            "image-height" => "323",
            "sub-image" => ""
        ],
        [
            "heading" => "災害時の情報収集に利用する <br class='for-sp'>太陽光発電設備・非常用蓄電池",
            "detail" => "必要な災害情報を入手するために、蓄電池に貯められた電力は、集会室のコンセントからワンセグテレビやラジオ、携帯電話などの情報機器に電力を供給します。また、アクティブパークやウェルカムプラザ、オーナーズリビングにも電力を供給します。",
            "notice" => "※非常用蓄電池は、2階自家用電気室に設置",
            "image" => "disaster-prevention/disaster-prevention/solar-power.jpg",
            "image-width" => "308",
            "image-height" => "208",
            "sub-image" => ""
        ],
        [
            "heading" => "災害時の共用トイレ使用に備えた <br class='for-sp'>非常用水貯留槽",
            "detail" => "災害時でも1階車いす使用者用便房が利用できるよう、排水用に使用する水を貯水できる非常用水貯留槽を設けています。<br class='for-pc'>
                         また、1階ゴミ置き場に設置のスロップシンク水栓を使用し、他のトイレ洗浄水としても利用可能です。",
            "notice" => "※内外部のインフラ状況等により使用できない場合があります。",
            "image" => "disaster-prevention/disaster-prevention/emergency-water.jpg",
            "image-width" => "308",
            "image-height" => "208",
            "sub-image" => ""
        ],
        [
            "heading" => "停電時でも水が使える <br class='for-sp'>共用部低層階部は直結給水",
            "detail" => "共用部低層階部への給水は、水道本管から受水槽を経由しない直結給水を採用。災害時に万が一給水ポンプが停止しても、水道局からの配水が停止しない限り、低層階部の共用水栓では水を使うことができます。",
            "notice" => "1階：車いす使用者用便房、男・女トイレ、オーナーズリビング、ごみ置き場<br>
                         2階：アクティブステーション、洗濯室、カフェコーナー、キャビンラウンジ等",
            "image" => "disaster-prevention/disaster-prevention/direct-water.jpg",
            "image-width" => "308",
            "image-height" => "208",
            "sub-image" => ""
        ],
    ];
?>

<section class="disaster-prevention-section">
    <div class="disaster-prevention-section_inner">
        <div class="disaster-prevention_information">
            <h2 class="disaster-prevention_heading">避難時や災害発生後まで配慮した<br class='for-sp'>防災対策。</h2>
            <p class="disaster-prevention_detail">基本的なライフラインの確保など、災害の時も変わりない日常を目指して、<br class='for-pc'>様々な視点から安心を支える取り組みを行っています。</p>
        </div>
        <?php foreach($disaster_prevention_database as $point) { ?>
            <?php get_template_part('components/common/point', null, ['point' => $point, 'page' => $args['page']]); ?>
        <?php } ?>
    </div>
</section>