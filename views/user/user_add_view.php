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
                <h2 class="mb-4">ユーザー登録</h2>
                <p class="px-24 pt-2 pb-4 text-left text-xl">※必要な項目を入力して、登録ボタンを押してください</p>

                <form action="">
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">名前：</label>
                        <input class="form-control w-10/12" type="text" placeholder="名前を入力してください" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">ポータルID：</label>
                        <input class="form-control w-10/12" type="text" placeholder="ポータルサイトのIDを入力してください" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">社員番号：</label>
                        <input class="form-control w-10/12" type="text" placeholder="社員番号を入力してください" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">コムデザインID：</label>
                        <input class="form-control w-10/12" type="text" placeholder="コムデザインのIDを入力してください" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">事務所：</label>
                        <input class="form-control w-10/12" type="text" placeholder="事務所名を選択" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">所属：</label>
                        <input class="form-control w-10/12" type="text" placeholder="所属を選択" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">生年月日：</label>
                        <input class="form-control w-10/12" type="date" placeholder="生年月日を入力してください" name="info">
                    </div>
                    <div class="flex mb-2 mx-24">
                        <label class="form-label pt-2 w-2/12">共通ID：</label>
                        <input class="form-control w-10/12" type="text" placeholder="共通IDを入力してください" name="info">
                    </div>
                    <div class="flex mb-4 mx-24">
                        <label class="form-label pt-2 w-2/12">権限：</label>
                        <input class="form-control w-10/12" type="text" placeholder="権限を選択" name="info">
                    </div>
                    <div class="text-right mx-32">
                        <button type="button"
                            class="bg-red-300 ring-offset-2 ring-2 w-40 mt-2 ml-2 py-2 px-4 rounded-md">登録</button>
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

    <script src="<?= WEB_ROOT; ?>js/main.js"></script>
</body>



</html>