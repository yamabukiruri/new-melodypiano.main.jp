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
        <meta name="description" content="横浜市鶴見区北寺尾にある【メロディー♪ピアノ教室】のホームページです。横浜市鶴見区北寺尾、馬場、獅子ヶ谷、上の宮、東寺尾、下末吉、鶴見中央、綱島、大倉山、菊名から通っていただいています。4歳のお子さまから大人の方まで、楽しくご指導いたします。">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="2WkNBfTH23C3Ul17k9WwtN7d3XeZivb71UPUlMf5f6o" />
        <title>メロディー♪ピアノ教室（横浜市鶴見区北寺尾）-講師紹介</title>
        <!--OGP-->
        <meta property="og:url" content="http://melodypiano.main.jp/profile.html">
        <meta property="og:type" content="website">
        <meta property="og:title" content="メロディー♪ピアノ教室-講師紹介">
        <meta property="og:description" content="横浜市鶴見区北寺尾にある【メロディー♪ピアノ教室】のホームページです。4歳のお子さまから大人の方まで、楽しくご指導いたします。">
        <meta property="og:image" content="http://melodypiano.main.jp/image/piano.jpg">
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
            <div id="contact-form">
                <div class="container">
                    <h2>お問い合わせを受け付けました</h2>
                    <p id="thank-you">お問い合わせありがとうございます。
                        数日以内に、講師よりメールでご連絡させていただきます。</p>
                    <div id="contact-contents">
                        <h3>入力内容</h3>
                        <form>
                            <p>お名前</p>
                            <div class="echo">
                                <?php echo nl2br($_POST['name']); ?>
                            </div>
                            <p>メールアドレス</p>
                            <div class="echo">
                                <?php echo nl2br($_POST['mail']); ?>
                            </div>
                            <p>メッセージ</p>
                            <div class="echo">
                                <?php echo nl2br($_POST['form-message']); ?>
                            </div>
                        </form>
                    </div>
                </div>
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