<!DOCTYPE html>
<html lang="ja">

<head>
    <?php require dirname(__FILE__) . "/../_header.php"; ?>
</head>

<body>
    <div class="wrapper">

        <div class="container_top">
            <div class="top_left">
                <?php require dirname(__FILE__) . "/../top/_top_left.php"; ?>
            </div>

            <div class="top_main">

                <div class="top_up">
                    <?php require dirname(__FILE__) . "/../top/_top_top.php"; ?>
                </div>

                <div class="top_down">
                    <?php require dirname(__FILE__) . "/../top/_top_menu.php"; ?>
                </div><!-- top_down -->

            </div><!-- top_main -->

            <div class="top_right">
                <?php require dirname(__FILE__) . "/../top/_top_right.php"; ?>
            </div>

        </div><!-- container_top -->

        <div class="container_main">
            <div class="main_left">
                <?php require dirname(__FILE__) . "/../left/_left_menu.php"; ?>
            </div>
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main">
                <h2>よく使う電話番号</h2>

                <table class="table table-bordered align-middle">
                    <thead class="align-middle text-center">
                        <tr class="table-primary">
                            <th class="th_03">部署名</th>
                            <th class="th_03">連絡先</th>
                            <th class="th_03">備考</th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="td_03">イオンヘルプデスク総合受付</td>
                        <td class="td_03 tel">0120-957-246</td>
                        <td class="td_03">3→PC,マイページ　4→DWH　5→TV会議</td>
                    </tr>

                    <tr>
                        <td class="td_03" rowspan="1">POS運用サポートチーム</td>
                        <td class="td_03 tel">080-2195-9012</td>
                        <td class="td_03">メイン</td>
                    </tr>

                    <tr>
                        <td class="td_03" rowspan="1">統合サーバチーム(新)</td>
                        <td class="td_03 tel">070-3237-1088</td>
                        <td class="td_03">2022/8/29(月)から</td>
                    </tr>
                    <tr>
                        <td class="td_03" rowspan="2">まいばすけっと本部</td>
                        <td class="td_03 tel">070-1735-8246</td>
                        <td class="td_03">当番携帯</td>
                    </tr>
                    <tr>
                        <td class="td_03 tel">070-6964-5854</td>
                        <td class="td_03">目黒さんの番号です</td>
                    </tr>

                    <tr>
                        <td class="td_03">NCR</td>
                        <td class="td_03 tel">0120-923-627</td>
                        <td class="td_03"></td>
                    </tr>
                    <tr>
                        <td class="td_03">富士電機</td>
                        <td class="td_03 tel">0570-091-666</td>
                        <td class="td_03">平日・土日祝：8:30～22:00</td>
                    </tr>
                    <tr>
                        <td class="td_03">富士通フロンテック</td>
                        <td class="td_03 tel">048-599-4404</td>
                        <td class="td_03">平日・土日祝：8:00～24:00</td>
                    </tr>

                    <tr>
                        <td class="td_03" rowspan="2">統合SD</td>
                        <td class="td_03 tel">0120-957-246 ガイダンス【3】</td>
                        <td class="td_03"></td>
                    </tr>
                    <tr>
                        <td class="td_03 tel">050-3198-5414（転送）</td>
                        <td class="td_03"></td>
                    <tr>

                    <tr>
                        <td rowspan="2" class="td_03">寺岡精工</td>
                        <td class="td_03 tel">0120-975-194</td>
                        <td class="td_03">修理受付：24H、 対応：9:00～21:00</td>
                    </tr>
                    <tr>
                        <td class="td_03 tel">050-3486-0905</td>
                        <td class="td_03"></td>
                    <tr>

                    <tr>
                        <td class="td_03">京セラ</td>
                        <td class="td_03 tel">0120-35-0038</td>
                        <td class="td_03"></td>
                    </tr>

                    <tr>
                        <td class="td_03">安否確認サービスデスク</td>
                        <td class="td_03 tel">06-6456-2108　(9:00~20:00)</td>
                        <td class="td_03"></td>
                    </tr>

                    <tr>
                        <td class="td_03">TTSS</td>
                        <td class="td_03 tel">03-5791-4236</td>
                        <td class="td_03"></td>
                    </tr>

                    <tr>
                        <td class="td_03" textalign="left">埼玉事務所FAX</td>
                        <td class="td_03 tel">048-526-5545</td>
                        <td class="td_03"></td>
                    </tr>

                    <tr>
                        <td class="td_03" textalign="left">埼玉時責</td>
                        <td class="td_03 tel">090-3263-0282</td>
                        <td class="td_03"></td>
                    </tr>
                </table>

            </div><!-- main -->
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main_right">
                <?php require dirname(__FILE__) . "/../right/_right_menu.php"; ?>
            </div>


        </div><!-- container_main -->

        <?php require dirname(__FILE__) . "/../_footer.php"; ?>

    </div><!-- wrapper -->

    <script src="../../js/tab.js"></script>
    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>

</html>