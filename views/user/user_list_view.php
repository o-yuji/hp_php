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
                <h2 class="mb-8">ユーザー一覧</h2>

                <table class="table table-bordered break-all align-middle">
                    <thead class="align-middle text-center">
                        <tr class="table-primary">
                            <th>id</th>
                            <th>名前</th>
                            <th>コムデザイン</th>
                            <th>ポータル</th>
                            <th>aeon</th>
                            <th>所属</th>
                            <th>共通ID</th>
                            <th>メール</th>
                        </tr>
                    </thead>



                    <?php foreach ($users as $user) : ?>
                    <tr>
                        <td class="text-center"><?= $user['id']; ?></td>
                        <td class="text-center"><?= $user['name']; ?></td>
                        <td class="text-center"><?= $user['com_id']; ?></td>
                        <td class="text-center"><?= $user['portal_id']; ?></td>
                        <td class="text-center"><?= $user['aeon_id']; ?></td>
                        <td class="text-center"><?= $user['shozoku']; ?></td>
                        <td><?= $user['common_id']; ?></td>
                        <td><?= $user['mail']; ?></td>
                    </tr>
                    <?php endforeach; ?>
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

    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>



</html>