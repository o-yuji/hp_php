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
                <h2>TOPページ</h2>
                <form action="./index/history_post.php" method="POST">
                    <label class="form-label pt-3">更新履歴：</label>
                    <input class="form-control rounded" type="text" placeholder="更新内容を入力してください" name="info">
                    <input type="hidden" name="name" value="<?= $_SESSION['name']; ?>">
                    <button class="mt-3 ring-2 ring-blue-500 bg-blue-200 btn_ok_m" type="submit">登録</button>
                </form><br>

                全<?= $history_cnt ?>件<br>
                <table class="table table-bordered break-all align-middle">
                    <thead class="align-middle text-center">
                        <tr class="table-primary">
                            <th>更新日時</th>
                            <th>更新者</th>
                            <th>更新内容</th>
                            <th width="50px">削除</th>
                        </tr>
                    </thead>
                    <?php foreach ($disp_data as $key => $history) : ?>
                    <tbody>
                        <tr>
                            <td width="200px" class="text-center"><?= h($history['updated_at']) . " "; ?></td>
                            <td width="150px" class="text-center"><?= h($history['name']) . " "; ?></td>
                            <td><?= h($history['info']) . "<br>"; ?></td>
                            <td>
                                <input type="hidden" name="id" value="<?= h($history["id"]); ?>">
                                <button type="button" data-id="<?= h($history["id"]); ?>" class="btn_off">
                                    <i class="btn_on fas fa-2x fa-trash-alt"></i></button><!-- 削除ボタン -->
                            </td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
                <!-- ページ移動 -->
                <div>
                    <?php if ($now  > 1) : ?>
                    <a href="index.php?page_id=<?php echo ($now - 1); ?>"><span class="page_cnt">前へ</span></a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $max_page; $i++) : ?>
                    <?php if ($i == $now) : ?>
                    <span class="page_cnt selected">
                        <?= "[" . $i . "]"; ?>
                    </span>
                    <?php else : ?>
                    <a href="index.php?page_id=<?= $i; ?>">
                        <span class="page_cnt">
                            <?= "[" . $i . "]"; ?>
                        </span>
                    </a>
                    <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($now  < $max_page) : ?>
                    <a href="index.php?page_id=<?php echo ($now + 1); ?>"><span class="page_cnt">次へ</span></a>
                    <?php endif; ?>
                </div>

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