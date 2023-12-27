<?php

/**
 * Template Name: イマジネーションランドのテンプレート
 */

$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];

$zone_database = [
    [
        "zone" => "Greeting Zone",
        "zone-id" => "greeting",
        "zone-jp" => "グリーティングゾーン",
        "group" => [
            [
                "title" => "ここに来る誰もが挨拶を交わす広場、<br>あったら楽しいと思いませんか？",
                "heading" => "ウェルカムプラザ",
                "information" => "トネリコの大木を中心に、大勢の人々を歓迎するウェルカムプラザ。<br class='for-pc'>
                                      街のエントランスに続くコミュニティゾーンとして、できれば世界中の人々が立ち寄り、<br class='for-pc'>
                                      気軽に挨拶を交わせる広場を目指したい･･･。<br class='for-pc'>
                                      そんな場にあって欲しいのは、美しい風景と居心地の良さ。<br class='for-pc'>
                                      それに人々が自然に笑顔になる演出ではありませんか？<br class='for-pc'>
                                      ウェルカムプラザの大木は、人に心地の良い木陰をつくります。<br class='for-pc'>
                                      中央にある色鮮やかな花壇は、立ち話に飽きたらその淵に腰掛けることもできます。<br class='for-pc'>
                                      行き交う誰もが笑顔を交わせる広場です。"
            ],
            [
                "title" => "この街がワクワクするのは、<br>くじらがどこかに隠れているから。",
                "heading" => "くじらテラス",
                "information" => "大きく優雅なカーブを描くくじらの大階段やウィング状に広がったウエーブデッキからなるくじらテラス。<br class='for-pc'>
                                      大階段は、威厳のある構えながら、座って会話を楽しめるベンチになったり、<br class='for-pc'>
                                      子どもたちの遊び場にもなるまるでヨーロッパの公園のようなしつらえです。<br class='for-pc'>
                                      ここからは、ウェルカムプラザの花々の彩りや人々の賑わいも楽しむことができます。<br class='for-pc'>
                                      そして、上空から俯瞰すれば、まるで「くじらの尾ひれ」のカタチに見えるので、<br class='for-pc'>
                                      きっとこの街の、自慢の憩いの場となるでしょう。"
            ],
        ]
    ],
    [
        "zone" => "Attractive Zone",
        "zone-id" => "attractive",
        "zone-jp" => "アトラクティブゾーン",
        "group" => [
            [
                "title" => "妖精のしわざとしか思えないこと、<br>いくつになってもありませんか？",
                "heading" => "妖精の小路",
                "information" => "冒険の森と水憩テラスをつなぐ、緑と水に囲まれた小路。<br class='for-pc'>
                                      ここでは妖精のしわざとしか思えない、鈴のような音やまばたきしたような光を感じることができます。<br class='for-pc'>
                                      神話に登場する妖精エルフが本当に住んでいるのかもしれません。<br class='for-pc'>
                                      毎日探検に出かける子どもたちによれば、妖精の隠れ家や魔法の木もすでに発見されたとか。<br class='for-pc'>
                                      今度の週末、お子さんと一緒に出かけませんか。<br class='for-pc'>
                                      信じる者にしか妖精は見えないといいますが、あなたの場合は、さてどうなるのでしょう？"
            ],
            [
                "title" => "子どもたちにとって、<br>冒険は走りまわって世界を知ることです。",
                "heading" => "冒険の森",
                "information" => "起伏に富んだ地形に石橋、様々なドングリと出会う木立を縫うようにめぐる迷路状の小路、<br class='for-pc'>
                                      そして、突然現れるこもれび広場や見上げるタブの巨木。<br class='for-pc'>
                                      子どもたちの好奇心を満たすこの森は、大人が忘れかけた冒険心を刺激する場でもあります。<br class='for-pc'>
                                      石橋の頂点に上るまで、誰がいちばんドングリを拾えるか、子どもの頃に還って、お子さんと競争してみませんか。<br class='for-pc'>
                                      冒険の森は、大人の五感も目を覚ます場所なのです。"
            ],
        ]
    ],
    [
        "zone" => "Friendship Zone",
        "zone-id" => "friendship",
        "zone-jp" => "フレンドシップゾーン",
        "group" => [
            [
                "title" => "火があたためてくれるのは、<br>遊び心と コミュニケーションです  ",
                "heading" => "暖憩テラス",
                "information" => "子どもの頃に走りまわった「原っぱ」。<br class='for-pc'>
                                      広い空に浮かぶ雲を眺めたり、トンボやバッタを追いかけたりと、そこにはたくさんの想像力がありました。<br class='for-pc'>
                                      そんな原っぱを都会の真ん中に描いたのが、この暖憩テラスです。<br class='for-pc'>
                                      このまわりではテントを張ってキャンプの練習をしたり、仲間とともにバーベキューを楽しむこともできます。<br class='for-pc'>
                                      夜には、ファイヤープレイスの生火のまわりに集まったり、寝転がって夜空に煌めく星座を眺めることも･･･。<br class='for-pc'>
                                      火の温もりや揺らぎとともに、贅沢な時を過ごす特別な原っぱです。"
            ],
            [
                "title" => "人と自然の美味しい関係は、<br>主に土の上で結ばれる",
                "heading" => "ハーベストテラス",
                "information" => "陽当たりの良いスロープ沿いに設けられた段々畑、それがこの街の家庭菜園、ハーベストテラスです。<br class='for-pc'>
                                      自然の営みにふれる喜びや、採りたてのフレッシュな味を知れば、野菜やハーブ嫌いのお子さんもきっと少なくなります。<br class='for-pc'>
                                      まわりには、畑仕事も一層楽しくなる、ツリーハウスのような見晴らしの良いツリーデッキや大きなツリースライダーも。<br class='for-pc'>
                                      読書や休憩にもぴったりな階段ベンチもあります。<br class='for-pc'>
                                      ハーベストテラスは、土と自然とふれあいながら都会をゆったり休む場になります。"
            ],
        ]
    ],
    [
        "zone" => "Peaceful Zone",
        "zone-id" => "peaceful",
        "zone-jp" => "ピースフルゾーン",
        "group" => [
            [
                "title" => "ママ、知ってた？<br>その季節に咲いた花の色を<br>小鳥は歌っているんだって。",
                "heading" => "季節の散歩道",
                "information" => "花木や実のなる木が様々に植えられ、歩くたびに四季を感じることができる小路が季節の散歩道です。<br class='for-pc'>
                                      小路に沿った大小様々な円形の広場にはベンチも備え、<br class='for-pc'>
                                      蝶が舞い小鳥たちが歌を添える自然を語らいながらゆっくりと観賞できる静穏に包まれた憩いの場。<br class='for-pc'>
                                      ベビーカーを押すカップルとお年寄りのご夫婦が小路で出会い、花木や赤ちゃんの話題で温かな散策を共有する、<br class='for-pc'>
                                      そんな豊かなふれあいも生まれることでしょう。"
            ],
            [
                "title" => "草花に直感を得た芸術家は数えきれない。<br>庭は天才の母でもあります。",
                "heading" => "ガーデンギャラリー",
                "information" => "イングリッシュガーデンのような花々や緑の中に、<br class='for-pc'>
                                      デコラティブなオーナメントやフラワーポットが点在するガーデンギャラリー。<br class='for-pc'>
                                      自然と造形物が時をかけて調和するアートのような風景を味わい、<br class='for-pc'>
                                      ガーデン内を散策できる小路やパーゴラのある小広場でゆっくりと植物を観賞することもこのガーデンの楽しみ。<br class='for-pc'>
                                      屋内のガーデンエントランスからも望めるこのギャラリーは、歩くたびに、そしてベンチで一息つくたびに、<br class='for-pc'>
                                      歳月の織り成す、美しい風景に癒されます。"
            ],
        ]
    ],
    [
        "zone" => "Bright Zone",
        "zone-id" => "bright",
        "zone-jp" => "ブライトゾーン",
        "group" => [
            [
                "title" => "未来の夢を未来のあなたへ贈る、<br>この森の素敵な魔法で。",
                "heading" => "ホーリーグローブ",
                "information" => "くじらテラスとアクティブパークの間にある、こんもりとした小さな森は、豊かな緑が繁り、<br class='for-pc'>
                                    この街に吹く強い風や周囲の喧騒を鎮めてくれる聖なる森。<br class='for-pc'>
                                    それがホーリーグローブです。この森のそんな不思議な力を信じて、<br class='for-pc'>
                                    住民の皆様の未来への想いを込めたタイムカプセルを埋設し、いつの日か掘り出して夢を確認しあう予定です。<br class='for-pc'>
                                    ホーリーグローブは、皆様の過去と未来をつなげる癒しの森なのです。"
            ],
            [
                "title" => "アニバーサリーツリーは祝福の木。<br>その年輪にみなさんの幸せが<br>たくさん刻まれますように。",
                "heading" => "ガーデンアプローチ",
                "information" => "月島駅側からのアプローチとなる場所に、気持ちをオンからオフに切り替える空間として備えたガーデンアプローチ。<br class='for-pc'>
                                    ゲートツリーとしてカヤノキを配し、大きなサークル状の広場には、中央にシンボリックなセンペルセコイヤを配置。<br class='for-pc'>
                                    駅から続く都市の喧騒から、針葉樹の連なる自然の安らぎに包まれます。<br class='for-pc'>
                                    クリスマスシーズンには、センペルセコイヤをイルミネーションで彩り、<br class='for-pc'>
                                    この季節、この街ならではの幻想的な世界感を創出。<br class='for-pc'>
                                    すべてのパパとママのサンタクロースモードをオンにします。"
            ],
        ]
    ],
];
?>
<main id="site-content">
    <?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    <?php get_template_part('components/common/breadcrumb', null, ['parent' => [], 'self' => $self]); ?>
    <?php get_template_part('components/imagination-land/story-introduction'); ?>
    <?php get_template_part('components/imagination-land/zone-anchor-list', null, ['position' => 'middle']); ?>
    <div class="zone-container">
        <?php foreach ($zone_database as $zone) { ?>
            <?php get_template_part('components/imagination-land/zone', null, [
                "zone" => $zone["zone"],
                "zone-id" => $zone["zone-id"],
                "zone-jp" => $zone["zone-jp"],
                "group" => $zone["group"]
            ]); ?>
        <?php } ?>
    </div>
    <?php get_template_part('components/imagination-land/zone-anchor-list', null, ['position' => 'bottom']); ?>
    <?php get_template_part('components/imagination-land/legend'); ?>
</main>