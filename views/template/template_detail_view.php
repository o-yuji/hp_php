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
                <h2>雛形</h2>

                <div class="flex">
                    <button
                        class="h-6 w-40 mb-8 mr-4 bg-blue-100 rounded-md mt-2 ring-2 ring-blue-400 text-base no-underline"
                        type="button">
                        <a href="template.php">雛形一覧</a></button>

                    <button class="h-6 w-40 mb-8 bg-red-300 rounded-md mt-2 ring-2 ring-blue-400 text-base no-underline"
                        type="button">
                        <a href="template_edit.php?id=<?= $id; ?>">雛形修正</a></button>
                </div>

                <form action="?action=insert" method="POST">
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">TO:</span><textarea name="to" id=""
                            class="w-11/12 h-40 border-2" charset="UTF-8" disabled><?= $detail['mail_to'] ?></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">CC:</span><textarea name="cc" id=""
                            class="w-11/12 h-40 border-2" charset="UTF-8" disabled><?= $detail['mail_cc'] ?></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">BCC:</span><textarea name="bcc" id=""
                            class="w-11/12 h-8 border-2" charset="UTF-8" disabled><?= $detail['mail_bcc'] ?></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">タイトル:</span><textarea name="title" id=""
                            class="w-11/12 h-8 border-2" charset="UTF-8" disabled><?= $detail['title'] ?></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">内容:</span><textarea name="content" id=""
                            class="w-11/12 h-96 border-2" charset="UTF-8" disabled><?= $detail['content'] ?></textarea>
                    </div>
                    <div class="flex mb-2">
                        <span class="my-auto text-center w-1/12">備考:</span><textarea name="memo" id=""
                            class="w-11/12 h-16 border-2" charset="UTF-8" disabled></textarea>
                    </div>
                    <!-- <div class="flex mb-2">
                            <span class="my-auto text-center w-1/12">新規タグ:</span><input type="text" name="new_tag" id=""
                                class="w-11/12 h-8 border-2" charset="UTF-8" disabled></input>
                        </div> -->
                    <div class="flex justify-items-start my-4">
                        <span class="my-auto text-center w-1/12">タグ:</span>

                        <div class="w-11/12 h-full">
                            <?php foreach ($tags as $tag) : ?>
                            <input class="mx-2" type="checkbox" name="<?= $tag['id'] ?>" id="<?= $tag['id'] ?>"
                                <?= in_array($tag['name'], $col) ? "checked" : "" ?> disabled></input>
                            <label class="mr-4" for="<?= $tag['id'] ?>" disabled><?= $tag['name'] ?></label>
                            <?php endforeach; ?>
                        </div>
                    </div>

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

    <script src="../../js/tab.js"></script>
    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>

</html>