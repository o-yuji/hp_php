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
            <!-------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------->
            <div class="main">

                <h2>新規作成</h2>

                <?php print_r($item_merge); ?>

                <form action="./content/new_post.php" method="post">
                    <div class="mt-3 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                            charset="utf-8" placeholder="タイトルを入力ししてください" />
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">投稿先</label>
                        <select class="form-select" name="category" charset="utf-8" aria-label="Default select example">
                            <option disabled selected>投稿先のカテゴリを選択してください</option>
                            <?php foreach ($menu_list as $menu) : ?>
                            <option value="<?= $menu['menu_name']; ?>"><?= $menu['menu_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">内容</label>
                        <textarea class="ckeditor" name="content" charset="utf-8" style="text-align:left;">
                            <?php  ?>
                        </textarea>
                        <script src="../js/ckeditor/ckeditor.js"></script>
                    </div>

                    <button class="btn_ok_m mt-3 ring-2 ring-blue-500 bg-blue-200" type="submit">登録</button>
                </form>

            </div><!-- main -->
            <!-------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------------------------------->

            <div class="main_right">
                <?php require("right/_right_menu.php"); ?>
            </div>


        </div><!-- container_main -->

        <?php require("_footer.php"); ?>

    </div><!-- wrapper -->
</body>


<script src="<?= WEB_ROOT; ?>js/main.js"></script>
<script src="../js/btn.js"></script>

</html>