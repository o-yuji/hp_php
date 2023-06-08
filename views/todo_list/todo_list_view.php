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
                    <a href="todo_add.php">タスクの追加</a></button>

                <!-- タスクメニュー -->
                <div class="tab_switch">
                    <button class="tab_01 selected" data-tabname="menu01" type="button">
                        <a href="#">当日タスク</a>
                    </button>

                    <button class="tab_01" data-tabname="menu02" type="button">
                        <a href="#">長期タスク</a>
                    </button>

                    <button class="tab_01" data-tabname="menu03" type="button">
                        <a href="#">完了タスク</a>
                    </button>


                    <!-- 当日タスク -->
                    <div class="tab_flame selected" id="menu01">
                        <?php foreach ($today_tasks as $val): ?>
                        <?php echo $val['status'] != '済' ? '<div class="card border-info mb-4 px-8 py-8 w-full">' : '<div class="bg-primary card border-info mb-4 px-8 py-8 w-full">'; ?>
                        <!-- <div class="card border-info mb-4 px-8 py-8 w-full"> -->
                        <div class="card-header bg-transparent border-info flex justify-between font-bold">
                            <span class="text-2xl"><?= h($val['title']); ?></span>
                            <span class="tab_status text-red-500">ステータス：<?= h($val['status']); ?></span>
                        </div>

                        <div class="card-body">
                            <?= $val['content']; ?>
                        </div>

                        <div class="card-footer bg-transparent border-info flex justify-between">

                            <div class="flex">
                                <button type="submit" data-id="<?= h($val['id']); ?>"
                                    data-status="<?= h($val['status']); ?>"
                                    class="todo_bk_btn mr-2 bg-blue-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">戻す</button>

                                <button type="submit" data-id="<?= h($val['id']); ?>"
                                    data-status="<?= h($val['status']); ?>"
                                    class="todo_up_btn mr-2 bg-blue-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">更新</button>
                            </div>

                            <div class="todo_edit">
                                <form action="todo_edit.php?id=<?= h($val['id']); ?>" method="POST" class="mr-4">
                                    <button
                                        class="bg-red-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">編集</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- 長期タスク -->
                <div class="tab_flame" id="menu02">
                    <?php foreach ($every_tasks as $val): ?>
                    <div class="card border-info mb-4 px-8 py-8 w-full">
                        <div class="card-header bg-transparent border-info flex justify-between font-bold">
                            <span class="text-2xl"><?= h($val['title']); ?></span>
                            <span class="tab_status text-red-500">ステータス：<?= h($val['status']); ?></span>
                        </div>

                        <div class="card-body">
                            <?= $val['content']; ?>
                        </div>

                        <div class="card-footer bg-transparent border-info flex justify-between">
                            <div class="flex">
                                <button type="submit" data-id="<?= h($val['id']); ?>"
                                    data-status="<?= h($val['status']); ?>"
                                    class="todo_bk_btn mr-2 bg-blue-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">戻す</button>

                                <button type="submit" data-id="<?= h($val['id']); ?>"
                                    data-status="<?= h($val['status']); ?>"
                                    class="todo_up_btn mr-2 bg-blue-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">更新</button>

                            </div>
                            <div class="todo_edit.php">
                                <form action="todo_edit.php?id=<?= h($val['id']); ?>" method="POST" class="mr-4">
                                    <button
                                        class="bg-red-300 ring-offset-2 ring-2 w-24 mt-4 ml-2 py-2 px-4 rounded-md">編集</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- 完了タスク -->
                <div class="tab_flame" id="menu03">
                    <p>履歴(直近：30件)</p>
                    <?php foreach ($end_tasks as $val): ?>
                    <div class="card-header bg-transparent border-info flex justify-between font-bold">
                        <div><?= h($val['title']); ?></div>
                        <div class="flex">
                            <span class="tab_status text-red-500 mr-4">ステータス：<?= h($val['status']); ?></span>
                            <form action="todo_edit.php?id=<?= h($val['id']); ?>" method="POST" class="mr-4">
                                <button class="px-2 bg-blue-300 ring-offset-2 ring-2 rounded-md">編集</button>
                            </form>
                            <form action="todo_list.php?action=delete" method="POST">
                                <input type="hidden" name="id" value="<?= h($val['id']); ?>">
                                <input type="hidden" name="status" value="<?= h($val['status']); ?>">
                                <button class="todo_delete_btn px-2 bg-red-300 ring-offset-2 ring-2 rounded-md"
                                    type="button">削除</button>
                            </form>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <!-- tab_switch -->


        </div><!-- main -->
        <!---------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------------->
        <div class=" main_right">
            <?php require dirname(__FILE__). "/../right/_right_menu.php"; ?>
        </div>


    </div><!-- container_main -->

    <?php require dirname(__FILE__). "/../_footer.php"; ?>

    </div><!-- wrapper -->

    <script src="../../js/tab.js"></script>
    <script src="<?= WEB_ROOT; ?>js/main.js"></script>

</body>

</html>