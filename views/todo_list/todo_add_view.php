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
                <h2>ToDoリスト</h2>
                <button class="h-4 w-32 bg-blue-100 rounded-md mt-2 ring-2 ring-blue-400 text-sm" type="button">
                    <a href="todo_list.php">Todoリストへ戻る</a></button>

                <form action="#" method="post">

                    <select class="form-select mt-8" aria-label="Default select example" name="category">
                        <option value="today">当日タスク</option>
                        <option value="every">長期間タスク</option>
                    </select>

                    <input class="form-control mt-8" type="text" placeholder="タイトルを入力してください" name="title">

                    <select class="form-select mt-8" aria-label="Default select status" name="status">
                        <option value="未">未</option>
                        <option value="中">中</option>
                        <option value="済">済</option>
                    </select>

                    <div class="mt-8 mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">内容</label>
                        <textarea class="ckeditor" name="content" charset="utf-8" style="text-align:left;">
                                <?php  ?>
                            </textarea>
                        <script src="<?= WEB_ROOT; ?>js/ckeditor/ckeditor.js"></script>
                    </div>

                    <button class="btn_ok_m mt-3 ring-2 ring-blue-500" type="submit">登録</button>

                </form>

            </div><!-- main -->
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class="main_right">
                <?php require dirname(__FILE__). "/../right/_right_menu.php"; ?>
            </div>


        </div><!-- container_main -->

        <?php require dirname(__FILE__). "/../_footer.php"; ?>

    </div><!-- wrapper -->


    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>

</html>