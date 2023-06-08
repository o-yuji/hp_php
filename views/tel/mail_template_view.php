<!DOCTYPE html>
<html lang="ja">

<head>
    <?php require dirname(__FILE__). "/../_header.php"; ?>
</head>

<body>
    <div class="wrapper">

        <div class="container_top">
            <div class="top_left">
                <?php require dirname(__FILE__). "/../top/_top_left.php"; ?>
            </div>

            <div class="top_main">

                <div class="top_up">
                    <?php require dirname(__FILE__). "/../top/_top_top.php"; ?>
                </div>

                <div class="top_down">
                    <?php require dirname(__FILE__). "/../top/_top_menu.php"; ?>
                </div><!-- top_down -->

            </div><!-- top_main -->

            <div class="top_right">
                <?php require dirname(__FILE__). "/../top/_top_right.php"; ?>
            </div>

        </div><!-- container_top -->

        <div class="container_main">
            <div class="main_left">
                <?php require dirname(__FILE__). "/../left/_left_menu.php"; ?>
            </div>
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main">
                <h2>メール雛形</h2>

                <table class="mt-8 table table-bordered align-middle">
                    <thead class="align-middle text-center">
                        <tr class="table-primary">
                            <th class="th_03">宛先</th>
                            <th class="th_03">タイトル</th>

                            <th class="th_03">備考</th>
                        </tr>
                    </thead>

                    <tr>
                        <td class="td_03">POS運用サポートチーム</td>
                        <td class="td_03"><a href="#">時間外の調査依頼</a></td>
                        <td class="td_03">18:00~8:00</td>
                    </tr>



                </table>

            </div><!-- main -->
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main_right">
                <?php require dirname(__FILE__). "/../right/_right_menu.php"; ?>
            </div>


        </div><!-- container_main -->

        <?php require dirname(__FILE__). "/../_footer.php"; ?>

    </div><!-- wrapper -->

    <script src="../../js/tab.js"></script>
    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>

</html>