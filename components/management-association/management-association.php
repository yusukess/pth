<?php
    $information_database = [
        [
            "heading" => "経済の中心・中央区にありながら、<br>空・水・緑に囲まれた<br class='for-sp'>リゾートライクな住まい",
            "detail" => "このホームページは管理組合が、お住まいの皆様と外部の方々に向けて「パークタワー晴海」の魅力をお伝えするために、心を込めて制作しています。<br><br>
                         「パークタワー晴海」は、都心へのアクセスのしやすさ、住環境・施設などの魅力もさることながら、お住まいの皆様の「人のすばらしさ」にあります。今よりももっと住み良いマンションにするにはどうしたらよいか。毎月理事会で話し合いを続け、アイディアを出しながら運営をしておりますが、お住まいの皆様のご協力あってことです。<br><br>
                         これからも皆様と、パークタワー晴海での暮らしを向上させるために、ともに歩んでいければ嬉しい限りです。これからもお力添えをよろしくお願いいたします。
    ",
            "signature" => "パークタワー晴海　管理組合法人"
        ],
        [
            "heading" => "理事会／専門委員会",
            "detail" => "理事会はマンションのバリューアップのために、理事19名、監事2名の計21名に加え、管理会社である三井不動産レジデンシャルサービスの担当者も同席し、毎月開催しています。理事は立候補を募り不足は抽選で行います。<br><br>
                         理事長を筆頭に、コミュニティ／自治会担当・委員会／共用施設／修繕／IT・広報／防火・防災といった専門委員会に分かれ、その月の検討事項・報告事項を議論します。理事会の内容は、議事録としてまとめられ、住民へ配信されます。",
            "signature" => ""
        ],
        [
            "heading" => "管理組合総会",
            "detail" => "年に１回、オフラインもしくはオンラインにて開催されます。管理組合総会では、その年度の管理費等収支報告、事業報告について決議が行われます。その他、細則の変更や各委員会の活動報告が実施されます。こちらの議事録も住民の方がご覧いただけます。<br><br>
                         臨時総会<br>
                         クイックに検討・対応すべき事項は、臨時総会にて決議されます。パークタワー晴海では、過去に●度実施され、●年●月の臨時総会では、●●●●等が決議されました。",
            "signature" => ""
        ],
    ];
?>

<section class="management-association-section">
    <div class="management-association-section_inner">
        <?php foreach($information_database as $information) { ?>
            <div class="information-section">
                <div class="information-section_inner">
                    <h2 class="information_heading"><?php echo($information['heading'])?></h2>
                    <p class="information_detail"><?php echo($information['detail'])?></p>
                    <p class="information_signature"><?php echo($information['signature'])?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>