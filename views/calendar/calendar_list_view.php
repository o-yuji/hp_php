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
                <h2>スケジュール一覧</h2>

                <button class="h-4 w-32 bg-blue-100 rounded-md mt-2 ring-2 ring-blue-400 text-sm" type="button"><a
                        href="calendar.php">カレンダーへ戻る</a></button>
                <span class="pt-4 font-bold">《<?php echo $start_day; ?>》</span>


                <?php foreach($contents as $content): ?>
                <div class="card border-primary mb-1 w-full">
                    <!-- <div class="card border-primary mb-3" style="max-width: 18rem;"> -->
                    <div class="card-header">
                        <?php echo $content["title"]; ?>
                        <label class="ml-4 mr-2">期間:</label>
                        <?php echo $content["start_day"]; ?>
                        <span class="mx-2">~</span>
                        <?php echo $content["end_day"]; ?>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <?php echo $content["content"]; ?>
                        </blockquote>
                    </div>
                </div>

                <div class="mt-2 mb-4 flex flex-justify-center">
                    <form action="calendar_edit.php" method="get">
                        <input type="hidden" name="id" value=<?= $content['id']; ?>>
                        <button class="ml-4 w-16 rounded-md focus:ring-2 border-2 border-blue-400 bg-blue-200 text-sm"
                            type="submit" method="post">
                            編集
                        </button>
                    </form>
                    <form action="calendar_del.php" method="post">
                        <input type="hidden" name="id" value=<?= $content['id']; ?>>
                        <button class="ml-4 w-16 rounded-md focus:ring-2 border-2 border-red-400 bg-red-200 text-sm"
                            type="submit" method="post">
                            削除
                        </button>
                    </form>
                </div>
                <?php endforeach; ?>


            </div><!-- main -->
            <!---------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <div class=" main_right">
                <?php require dirname(__FILE__). "/../right/_right_menu.php"; ?>
            </div>


        </div><!-- container_main -->

        <?php require dirname(__FILE__). "/../_footer.php"; ?>

    </div><!-- wrapper -->
</body>


<script src="<?= WEB_ROOT; ?>js/main.js"></script>

</html>