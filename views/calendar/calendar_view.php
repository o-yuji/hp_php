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
                <h2>カレンダー</h2>

                <p class="pt-2 pb-2"><?php echo $y . "年". $m. "月度"; ?></p>

                <div>
                    <?php if ($prev <= 0 ): ?>
                    <a href="calendar.php?prev=<?php print($prev -1); ?>">
                        <span class="pr-4">
                            <←前月>
                        </span>
                    </a>
                    <?php else: ?>
                    <a href="calendar.php?prev=<?php print($prev); ?>">
                        <span class="pr-4">
                            <←前月>
                        </span>
                    </a>
                    <?php endif; ?>

                    <a href="calendar.php">当月</a>

                    <?php if ($next >= 0 ): ?>
                    <a href="calendar.php?next=<?php print($next + 1); ?>">
                        <span class="pl-4">
                            <翌月→>
                        </span>
                    </a>
                    <?php else: ?>
                    <a href="calendar.php?next=<?php print($next); ?>">
                        <span class="pl-4">
                            <翌月→>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>

                <table>
                    <tr>
                        <th class="border-2 border-blue-800 text-center bg-blue-200 text-red-500">日</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200">月</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200">火</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200">水</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200">木</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200">金</th>
                        <th class="border-2 border-blue-800 text-center bg-blue-200 text-blue-500">土</th>
                    </tr>

                    <?php echo "<tr>"; ?>

                    <!-- その数だけ空白を表示（1日の前の空白） -->
                    <?php for ($i = 1; $i <= $wd1; $i++):?>
                    <td class="h-24 border-2 border-blue-800"><?php echo "&nbsp"; ?></td>
                    <?php endfor; ?>

                    <!-- 日付を表示 -->
                    <?php while (checkdate($m, $d, $y)):?>

                    <?php if($d == idate("d") and $m == idate("m")): ?>
                    <td class="h-24 border-2 bg-red-300 border-blue-800">
                        <?php else: ?>
                    <td class="h-24 border-2 border-blue-800">
                        <?php endif; ?>

                        <!-- 日付 -->
                        <span class="text-2xl font-extrabold">
                            <?php echo $d; ?>
                        </span><br>
                        <!-- 追加 -->
                        <span>
                            <?php $day_01 = sprintf('%02d', $d); ?>
                            <a href="calendar_add.php?day=<?php echo $y. "-" . $m. "-" . $day_01; ?>">
                                <?php echo "追加"; ?>
                            </a>
                        </span><br>
                        <span>
                            <?php $day_01 = sprintf('%02d', $d); ?>
                            <a href="calendar_list.php?day=<?php echo $y. "-" . $m. "-" . $day_01; ?>">
                                <?php $day_cnt = $y. "-" . $m. "-" . $day_01; ?>
                                <?php echo "詳細:"; ?>
                                <?php echo "&nbsp". $calendar_DAO->get_cal_count($day_cnt,$_SESSION['name']). "件" ?>
                            </a>
                        </span>
                    </td>

                    <!-- 今日が土曜日の場合は… -->
                    <?php if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6): ?>
                    <?php echo "</tr>"; ?>
                    <!---週を終了、次の週がある場合は新たな行を準備---->
                    <?php if (checkdate($m, $d + 1, $y)): ?>
                    <?php echo "<tr>";?>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $d++; ?>
                    <?php endwhile; ?>

                    <!-- その数だけ空白を表示(月末の空白) -->
                    <?php $wdx = date("w", mktime(0, 0, 0, $m + 1, 0, $y)); ?>
                    <?php for ($i = 1; $i < 7 - $wdx; $i++): ?>
                    <?php echo "<td class='h-20 border-2 border-blue-800'>". "&nbsp". "</td>"; ?>
                    <?php endfor; ?>

                    <?php echo "</tr>"; ?>
                </table>

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