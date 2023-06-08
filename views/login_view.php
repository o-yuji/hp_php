<!DOCTYPE html>
<html lang="ja">

<head>
    <link rel="stylesheet" href="../css/modules/login/login.css">
    <?php include("_header.php"); ?>

</head>

<!----------------------------- メインここから -------------------------------->

<body>
    <div class="container_99">
        <!-- <div class="top_frame"> -->
        <!-- <div class=""> -->
            <!-- <div>ログイン画面</div> -->
        <!-- </div> -->
        <div class="main_frame_02">
            <div class="main_frame_03">
                <form id="loginForm" name="loginForm" method="POST" action="./login/login_post.php">
                    <h2 style="font-size:x-large">ログイン画面</h2><br>
                    <input type="text" class="form-control rounded" id="portal_id" charset=utf8 name="portal_id" placeholder="ポータルIDを入力してください" />
                    <input class="form-control mt-2 mb-2 rounded" type="password" name="password" charset=utf8 placeholder="社員番号を入力してください" /><br>
                    <!-- 
                    <button class="btn_ok_m ring-2 ring-blue-500 bg-blue-200" name="login" type="submit"
                        value="ログイン">ログイン</button> -->
                    <button class="login-btn" name="login" type="submit" value="ログイン">ログイン</button>
                </form>
            </div><!-- main_frame_03 -->
        </div><!-- main_frame_02 -->
    </div><!-- container_99 -->
    <!-- <div class="footer">
        <span class="mr-4"> <a href="http://192.168.16.26:81/web/app/login/login.php">テスト中</a></span>
    </div>footer -->
</body>
<!----------------------------- メインここまで -------------------------------->

</html>