<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include("_header.php"); ?>
</head>

<body>
    <div class="wrapper">

        <div class="container_top">
            <div class="top_left">
                <?php require("top/_top_left.php"); ?>
            </div>

            <div class="top_main">

                <div class="top_up">
                    <?php require("top/_top_top.php"); ?>
                </div>

                <div class="top_down">
                    <?php require("top/_top_menu.php"); ?>
                </div><!-- top_down -->

            </div><!-- top_main -->

            <div class="top_right">
                <?php require("top/_top_right.php"); ?>
            </div>

        </div><!-- container_top -->

        <div class="container_main">
            <div class="main_left">
                <?php require("left/_left_menu.php"); ?>
            </div>

            <div class="main">

                <h2 class="mb-4">記事一覧</h2>

                <?php foreach ($contents as $content) : ?>

                <div class="flex flex-justify-center mb-1">
                    <span class="text-ms">更新日時：<?php echo $content['updated_at']; ?></span>
                    <span class="ml-4 text-ms">登録者：<?php echo $content['add_name']; ?></span>
                </div>

                <div class="w-full p-2 rounded-md bg-blue-50 border-2 border-blue-600 min-h-fit">

                    <div class="w-full pl-4 py-2 rounded-md focus:ring-2 border-2 border-blue-700 bg-blue-300">
                        <?php echo $content['title']; ?>
                    </div>

                    <div class="w-full mt-2 p-8 rounded-md focus:ring-2 border-2 border-blue-700 bg-white">
                        <?php echo $content['content']; ?>
                    </div>
                    <div class="text-ms mt-2 ml-4">
                        最終更新者：<?php echo $content['update_name']; ?>
                    </div>
                </div>
                <div class="mt-2 mb-8 flex flex-justify-center">
                    <form action="content_edit.php" method="get">
                        <input type="hidden" name="id" value=<?= $content['id']; ?>>
                        <button
                            class="ml-4 w-24 rounded-md focus:ring-2 border-2 border-blue-700 bg-blue-400 text-white text-ms"
                            type="submit" method="post">
                            編集
                        </button>
                    </form>
                    <form action="./content/content_delete.php" method="post">
                        <input type="hidden" name="id" value=<?= $content['id']; ?>>
                        <button
                            class="ml-4 w-24 rounded-md focus:ring-2 border-2 border-red-700 bg-red-400 text-white text-ms"
                            type="submit" method="post">
                            削除
                        </button>
                    </form>
                </div>
                <?php endforeach; ?>

            </div><!-- main -->

            <div class="main_right">
                <?php require("right/_right_menu.php"); ?>
            </div>


        </div><!-- container_main -->

        <?php require("_footer.php"); ?>

    </div><!-- wrapper -->
</body>

<script src="<?= WEB_ROOT; ?>js/main.js"></script>

</html>