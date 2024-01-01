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

            try {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
    
                $name = htmlspecialchars($name);
                $email = htmlspecialchars($email);
                $message = htmlspecialchars($message);

                echo '<div id="contact-form">'
                .'<div class="container">'
                .'<h2>お問い合わせを受け付けました</h2>'
                .'<p id="thank-you">お問い合わせありがとうございます。
                数日以内に、講師よりメールでご連絡させていただきます。</p>';

                //お問い合わせがあったと講師に知らせるメール作成
                $honbun = '';
                $honbun .= 'melodypianp.main.jp経由でお問い合わせがありました。';
                $honbun .= "\n\n";
                $honbun .= "お名前：\n";
                $honbun .= $name."\n\n";
                $honbun .= "メールアドレス：\n";
                $honbun .= $email."\n\n";
                $honbun .= "メッセージ：\n";
                $honbun .= $message."\n\n";
                $honbun .= '数日以内にお客様にご返信差し上げてください。';

                //動作確認用
                //echo '<br>';
                //echo nl2br($honbun);
                echo 'テスト';

                //メール送信
                $title = 'お問い合わせがありました。';
                $header = 'From: '.$email; //送信元
                $honbun = html_entity_decode($honbun, ENT_QUOTES, 'UTF-8');
                mb_language('Japanese');
                mb_internal_encoding('UTF-8');
                mb_send_mail('yamabukiruri.chi@gmail.com', $title, $honbun, $header); //メールを送信する命令
            }
            
            catch (Exception $e){
                echo 'ただいま障害により大変ご迷惑をおかけしております。申し訳ございません。';
                //強制終了
                exit();
            }
            
            ?>

        </main>
        <!--<footer>
            <div class="container">
                <p>&copy; メロディー♪ピアノ教室</p>
            </div>
        </footer>-->

        <!--JavaScript-->
        <script src="script.js?date=202209192156"></script>
    </body>
</html>
