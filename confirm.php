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


  
<div class="confirm-wrapper">

  <!-- 送信ボタンが押されたら「」 -->
  <form action="confirm.php" method="post"> 
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="number" value="<?php echo $number; ?>">
    <input type="hidden" name="email" value="<?php echo $mail; ?>">
    <input type="hidden" name="select" value="<?php echo $select; ?>">
    <input type="hidden" name="message" value="<?php echo $message; ?>">

    <div class="confirm-inner">

      <h2 class="confirm-heading">
        お問い合わせ 内容確認
      </h2>
      <p class="confirm-desc">
        お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。
      </p>

      <div class="confirm-contents">
        <label>名前</label>
        <p><?php echo $name; ?></p>
      </div>
      <div class="confirm-contents">
        <label>電話番号</label>
        <p><?php echo $number; ?></p>
      </div>
      <div class="confirm-contents">
        <label>メールアドレス</label>
        <p><?php echo $mail; ?></p>
      </div>
      <div class="confirm-contents">
        <label>件名</label>
        <p><?php echo $select; ?></p>
      </div>
      <div class="confirm-contents">
        <label>お問い合わせ内容</label>
        <p><?php echo $message; ?></p>
      </div>

      <div class="btn-wrapper">

        <input class="submit" type="button" value="修正する" onclick="history.back(-1)">
        <button class="btn" type="submit" name="submit">送信する</button>
        
      </div>
    </div>

  </form>

</div>



<!-- confirm.php（確認画面）の送信ボタンが押されたら以下を実行する -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// フォームから送信されたデータを各変数に格納
$name = $_POST["name"];
$number = $_POST["number"];
$mail = $_POST["email"];
$select = $_POST["select"];
$message = $_POST["message"];
$email = "gen.guitar1090@gmail.com";
}
if (isset($_POST["submit"])) { // 送信ボタンが押された時に動作する処理
mb_language("ja");// 日本語をメールで送る場合
mb_internal_encoding("UTF-8");
$subject = "［自動送信］お問い合わせ内容の確認";
$body = {$name}　様お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。===================================================
【 お名前 】
{$name}
【 電話番号 】
{$number}
【 メール 】
{$mail}
【 件名 】
{$select}
【 お問い合わせ内容 】
{$message}
===================================================
内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

$fromEmail = "infini.gen1090@gmail.com"; // 送信元のメールアドレスを変数fromEmailに格納
$fromName = "ゲン test name";// 送信元の名前を変数fromNameに格納
$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";// ヘッダ情報を変数headerに格納する
mb_send_mail($email, $subject, $body, $header);// メール送信を行う//mb_send_mail("送信先メールアドレス", "件名", "メール本文","メール送信後の画面遷移");
header("Location: http://sample.com/mailto.php");//送信完了画面（mailto.php）へのURLを入る
exit;
}
?>


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