<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページの編集</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <main>
        <form action="mypage_update.php" method="post" enctype="multipart/form-data">
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello">
                <?php
                    echo "こんにちは！".$_SESSION['name']."さん" ;
                ?>
                </div>
                <div class="picture">
                    <img src="<?php echo "./image/".$_SESSION['picture'] ;?>">
                </div>
                <div class="text">
                    <p>
                        <label>氏名 : </label>
                        <input type="text" class="formbox" size="30" name="name"
                            value="<?php echo $_SESSION['name']; ?>"
                        >
                    </p>
                    <p>
                        <label>メール : </label>
                        <input type="text" class="formbox" size="30" name="mail"
                            pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                            value="<?php echo $_SESSION['mail']; ?>"
                        >
                    </p>
                    <p>
                        <label>パスワード : </label> 
                        <input type="text" class="formbox" size="30" name="password" id="password"
                        pattern="^[a-zA-Z0-9]{6,}$" value="<?php echo $_SESSION['password']; ?>">
                    </p>
                </div>
                <p class="line"></p>
                <div class="comments">
                    <textarea rows="6" cols="60" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>

                <div class="button">
                    <input type="submit" class="hensyu" value="この内容に変更する" />
                </div>
            </div>
        </form>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>
</body>