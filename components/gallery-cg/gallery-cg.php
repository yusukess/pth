<?php
    $gallery_database = [
        "appearance" => [
            "heading" => "外観",
            "photos" => [
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
            ]
        ],
        "exterior" => [
            "heading" => "エクステリア",
            "photos" => [
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
                [
                    "id" => "exterior",
                    "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                ],
            ]
        ],
         "common-area" => [
             "heading" => "共用部",
             "photos" => [
                 [
                     "id" => "exterior",
                     "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                 ],
                 [
                     "id" => "exterior",
                     "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                 ],
                 [
                     "id" => "exterior",
                     "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                 ],
             ]
         ]
    ];

    $cg_database = [
            "map" => [
                "heading" => "マップ",
                "photos" => [
                    [
                        "id" => "exterior",
                        "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                    ],
                    [
                        "id" => "exterior",
                        "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                    ],
                    [
                        "id" => "exterior",
                        "description" => "冒険の森のとりで橋。このあたりは暮らすほどに草木の成長が楽しみになりそうです。"
                    ],
                ]
            ]
        ];
?>

<section class="gallery-cg-section">
    <div class="gallery-cg-section_inner">
        <?php get_template_part( 'components/gallery-cg/section', null, ['section-id' => 'gallery', 'section-name' => 'ギャラリー', 'database' => $gallery_database ] ); ?>
        <?php get_template_part( 'components/gallery-cg/section', null, ['section-id' => 'cg', 'section-name' => 'CG集', 'database' => $cg_database ] ); ?>
    </div>
</section>