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
                <h2>追加画面</h2>
                <button class="h-6 w-40 mb-8 bg-blue-100 rounded-md mt-2 ring-2 ring-blue-400 text-base no-underline"
                    type="button">
                    <a href="template.php">雛形一覧</a></button>

                <p class="px-8 py-2 text-left text-xl">※必要な項目を入力して、登録ボタンを押してください</p>

                <form action="?action=insert" method="POST">
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">TO:</span><textarea name="to" id=""
                            class="w-11/12 h-16 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">CC:</span><textarea name="cc" id=""
                            class="w-11/12 h-16 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">BCC:</span><textarea name="bcc" id=""
                            class="w-11/12 h-8 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">タイトル:</span><textarea name="title" id=""
                            class="w-11/12 h-8 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">内容:</span><textarea name="content" id=""
                            class="w-11/12 h-96 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">備考:</span><textarea name="memo" id=""
                            class="w-11/12 h-16 border-2" charset="UTF-8"></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">新規タグ:</span><input type="text" name="new_tag" id=""
                            class="w-11/12 h-8 border-2" charset="UTF-8"></input>
                    </div>
                    <div class="flex justify-items-start my-4">
                        <span class="my-auto text-center w-1/12">タグ:</span>

                        <div class="w-11/12 h-full">
                            <?php foreach($tags as $tag): ?>
                            <input class="mx-2" type="checkbox" name="<?= $tag['id'] ?>" id="<?= $tag['id'] ?>"></input>
                            <label class="mr-4" for="<?= $tag['id'] ?>"><?= $tag['name'] ?></label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="text-right mr-4">
                        <button type="submit"
                            class="bg-red-300 ring-offset-2 ring-2 w-40 ml-2 py-2 px-4 rounded-md">登録</button>
                    </div>
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

    <script src="../../js/tab.js"></script>
    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>

</html>