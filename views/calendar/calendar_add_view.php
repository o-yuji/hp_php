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
                <h2>スケジュール登録</h2>

                <form action="" method="post">

                    <div class="mt-3 mb-3">
                        <label class="form-label">タイトル</label>
                        <input type="text" class="form-control" name="title" charset="utf-8"
                            placeholder="タイトルを入力ししてください" />
                    </div>

                    <div class="mt-3 mb-3 w-1/4">
                        <label class="form-label">開始日</label>
                        <input type="date" class="form-control" name="start_day" charset="utf-8"
                            value="<?php echo $_GET['day']; ?>" />
                    </div>

                    <div class="mt-3 mb-3 w-1/4">
                        <label class="form-label">終了日</label>
                        <input type="date" class="form-control" name="end_day" charset="utf-8"
                            value="<?php echo $_GET['day']; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">内容</label>
                        <textarea class="ckeditor" name="content" charset="utf-8" style="text-align:left;">
                            <?php  ?>
                        </textarea>
                        <script src="<?= WEB_ROOT; ?>js/ckeditor/ckeditor.js"></script>
                    </div>

                    <button class="btn_ok_m mt-3 ring-2 ring-blue-500 bg-blue-200" type="submit">登録</button>

                </form>

            </div><!-- main -->
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main_right">
                <?php require dirname(__FILE__) . "/../right/_right_menu.php"; ?>
            </div>


        </div><!-- container_main -->

        <?php require dirname(__FILE__) . "/../_footer.php"; ?>

    </div><!-- wrapper -->
</body>

<script src="<?= WEB_ROOT; ?>js/main.js"></script>

</html>