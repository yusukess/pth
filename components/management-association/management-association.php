<?php
$information_database = [
    [
        "heading" => "",
        "detail" => "このホームページはパークタワー管理組合が、お住まいの皆様と外部の方々に向けて「パークタワー晴海」の魅力をお伝えするために、心を込めて制作しています。<br><br>「パークタワー晴海」は、都心へのアクセスのしやすさ、水辺に面した住環境の良さに加え、他のマンションでは見られないテイストの共用施設を多く備えた、唯一無二のリゾートライクなマンションです。管理組合では、今よりももっと住み良く魅力あふれるマンションにするにはどうしたらよいかの話し合いを続け、各種イベントでは多くの住民が参加する、活気のあるマンションです。<br><br>これからも皆様と、パークタワー晴海での暮らしを実りあるものとするために、ともに歩んでいければ幸いです。これからもお力添えをよろしくお願いいたします。
    ",
        "signature" => "パークタワー晴海　管理組合"
    ],
    [
        "heading" => "理事会／専門委員会",
        "detail" => "理事会はマンションのバリューアップのために、理事19名、監事2名の計21名に加え、管理会社である三井不動産レジデンシャルサービスの担当者も同席し、毎月開催しています。理事は立候補を募り不足は抽選で選任されます。<br><br>理事長を筆頭に、コミュニティや自治会の担当、委員会として共用施設・修繕・IT・広報・防火防災といったその時々のテーマに沿った委員会に分かれ、その月の検討事項・報告事項を議論します。理事会の内容は、議事録としてまとめられ、アプリや居住者専用公式LINEを通じて住民へ配信されます。",
        "signature" => ""
    ],
    [
        "heading" => "管理組合総会",
        "detail" => "<span class='heading'>通常総会</span>
        年に１回、通常総会が開催されます。オンラインでの傍聴も可能です。総会では、その年度の管理費等収支報告、事業報告について決議が行われます。その他、規約・細則の変更や各委員会の活動報告が実施されます。こちらの議事録も区分所有者の皆様に速やかに開示しています。<br><br><span class='heading'>臨時総会</span>緊急を要する、あるいはクイックに対応すべき事項は、臨時総会にて決議されます。",
        "signature" => ""
    ],
];
?>

<section class="management-association-section">
    <div class="management-association-section_inner">
        <?php foreach ($information_database as $information) { ?>
            <div class="information-section">
                <div class="information-section_inner">
                    <h2 class="information_heading"><?php echo ($information['heading']) ?></h2>
                    <p class="information_detail"><?php echo ($information['detail']) ?></p>
                    <p class="information_signature"><?php echo ($information['signature']) ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>