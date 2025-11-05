<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログインエラーページの作成</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <main>
        <form action="mypage.php" method="post" enctype="multipart/form-data">
            <div class="err-message">メールアドレスまたはパスワードが間違っています。</div>
            <div class="login_contents">
                <div class="form-group">
                    <label class="label">メールアドレス</label><br>
                    <input type="text" class="textbox" size="40" name="mail"
                        pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                    <label class="label">パスワード</label><br>
                    <input type="password" class="textbox" size="40" name="password" id="password" required>
                </div>
                
                <div class="keeplog">
                    <label>
                        <input type="checkbox" name="keeplog" value="keeplog">ログイン状態を保持する
                    </label>
                </div>

                <div class="login">
                    <input type="submit" class="login_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>
</body>

</html>