<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-241512051-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-241512051-1');
        </script>
        <meta charset="utf-8">
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/e0c979d72c.js" crossorigin="anonymous"></script>
        <!--CSS-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <!--ファビコン-->
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!--フォント-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>メロディー♪ピアノ教室</h1>
            <nav id="header-list">
                <ul>
                    <li><a href="index.html">ホーム</a></li>
                    <li><a href="about.html">教室概要</a></li>
                    <li><a href="profile.html">講師紹介</a></li>
                    <li><a href="voice.html">生徒さんの声</a></li>
                    <li><a href="https://plaza.rakuten.co.jp/melodypiano/" target="_blank">教室ブログ<img src="images/link.png" class="link-icon"></a></li>
                    <li><a href="contact.html">お問い合わせ</a></li>
                </ul> 
            </nav>
        </header>
        <div id="hamburger">
            <div id="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="mask"></div>
        </div>
        <main>
            <?php
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['form-message'];

            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $message = htmlspecialchars($message);

            echo '<div id="contact-form">'
                .'<div class="container">'
                .'<h2>確認画面</h2>'
                .'<p id="thank-you">内容にお間違いがないか確認し、送信ボタンを押してください。
                入力ミスが発生している場合は、「戻る」ボタンを押して修正してください。</p>'
                .'<div id="contact-contents">'
                .'<h3>入力内容</h3>'
                .'<form method="post" action="submit.php">';

            $okflg = true; //フラグ制御

            if($name == ''){
                echo '<p>お名前</p>'.'<span class="error">名前が入力されていません。</span>'.'<br><br>';
                $okflg = false;
            }else{
                echo '<p>お名前</p>'.'<span class="word-break">'.$name.'</span><br><br>';
            }

            if(preg_match('/^[\w\-\.]+\@[\w\-\.]+\.([a-z]+)$/', $email) == 0){ //メールアドレスに異常があったら
                echo '<p>メールアドレス</p>'.'<span class="error">メールアドレスを正確に入力してください。</span>'.'<br><br>';
                $okflg = false;
            }else{
                echo '<p>メールアドレス</p>'.'<span class="word-break">'.$email.'</span><br><br>';
            }

            if($message == ''){
                echo '<p>メッセージ</p>'.'<span class="error">メッセージが入力されていません。</span>'.'<br><br>';
                $okflg = false;
            }else{
                echo '<p>メッセージ</p>'.'<span class="word-break">'.$message.'</span><br><br>';
            }

            echo '<div class="btn-wrapper">'
                .'<input class="btn" type="button" onclick="history.back()" value="戻る">'
                .'</div>';

            if($okflg == true){
                echo '<input type="hidden" name="name" value="'.$name.'">'
                    .'<input type="hidden" name="email" value="'.$email.'">'
                    .'<input type="hidden" name="message" value="'.$message.'">'
                    .'<div class="btn-wrapper">'
                    .'<input class="btn" type="submit" value="送信">'
                    .'</div>';
            }

            echo '</form></div></div></div>';
            ?>
            <div id="return">
                <a href="#contact-form">▲このページの先頭へ戻る</a>
            </div>
        </main>
        <footer>
            <div class="container">
                <p>&copy; メロディー♪ピアノ教室</p>
            </div>
        </footer>

        <!--JavaScript-->
        <script src="script.js?date=202209192156"></script>
    </body>
</html>