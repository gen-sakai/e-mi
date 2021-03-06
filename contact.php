<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

  <!-- メタ -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- タイトル -->
  <title>イーマイ</title>
  <meta name="description" content="【サイト説明文】" />
  <link rel="shortcut icon" href="img/favicon.png" />
  
  <!-- OGP -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="【サイトURL】" />
  <meta property="og:image" content="【OGP画像URL】" />
  <meta property="og:title" content="イーマイ" />
  <meta property="og:site_name" content="イーマイ" />
  <meta property="og:description" content="イーマイのサービスサイト" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- リセットcss -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  
  <!-- Web font -->
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
  
  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="gnav">
  <div class="gnav-wrapper">
    <a class="logo" href="index.html">
      <p>
        LOGO
      </p>
    </a>
    <nav>
      <ul>
        <li>
          <a href="index.html">TOP</a>
        </li>
        <li>
          <a href="about-emi.html">What is e-mining</a>
        </li>
        <li>
          <a href="">What is Obcatena</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
        <li>
          <a href="https://e-mi.jp/pint_e-mi">イーマイ×PinT</a>
        </li>
      </ul>
    </nav>
  </div>
</div>


<div class="contact-wrapper">
  <div class="contact-inner">
    <h2>
      お問い合わせ
    </h2>

    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
      
      <div class="input-form">
        <label for="name">名前</label>
        <input type="text" name="name" id="name" class="name" value="" placeholder="例 ) 山田 太郎">
      </div>
      
      <div class="input-form">
        <label for="number">電話番号</label>
        <input type="text" name="number" id="number" class="number" value="" placeholder="00-0000-0000">
      </div>
        
      <div class="input-form">
        <label for="email">メールアドレス</label>
        <input type="text" name="email" id="email" class="email" value="" placeholder="example@com">
      </div>

      <div class="input-form">
        <label for="select">件名
        </label>
        <select name="select">
          <option value="サンプル1">イーマイお申込みについて</option>
          <option value="サンプル2">アプリに内のご質問について(スクリーンショットをお送りください)</option>
          <option value="サンプル3">その他</option>
        </select>
      </div>

      <div class="input-form">
        <label for="message">お問い合わせ内容</label>
        <textarea type="text" name="message" id="message" class="message" value="" placeholder="example@com"></textarea>
      </div>

      <button type="submit" name="submit" value="確認画面へ" class="submit">確認画面へ</button>
    
  </div>
</div>

<!-- フッター -->
<footer>

  <!-- フッター上 -->
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-menu">
        <nav>
          <ul>
            <li>
              <a href="rule.html">利用規約</a>
            </li>
            <li>
              <a href="privacy-policy.html">プライバシーポリシー</a>
            </li>
            <li>
              <a href="important.html">重要事項</a>
            </li>
            <li>
              <a href="tokusho.html">特定商取引法に基づく表示</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- フッター下 -->
    <div class="footer-bottom">
      <p class="copy-right">
        Copyrights © 2022 All Rights Reserved by White Card Co.,LTD.
      </p>
    </div>
    
  </div>
</footer>


  <!-- js -->
  <script src="js/main.js"></script>
</body>
</html>