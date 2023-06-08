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
                <h2>雛形一覧</h2>

                <button class="h-6 w-40 bg-blue-100 rounded-md mt-2 ring-2 ring-blue-400 text-base no-underline"
                    type="button">
                    <a href="template_add.php">雛形作成</a></button>

                <div class="m-8 mb-1 text-left">

                    <p class="">タイトル</p>
                    <?php foreach ($template_lists as $list) : ?>
                    <li><a href="template_detail.php?id=<?= $list['id']; ?>"> <?= $list['title']; ?></a></li>
                    <?php endforeach; ?>

                    <p class="mt-4">タグ一覧</p>
                    <?php foreach ($tags as $tag) : ?>
                    <li><?= $tag['name']; ?></li>
                    <?php endforeach; ?>

                </div>

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