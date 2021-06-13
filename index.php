<html>
<link rel="stylesheet" href="./css/style_index.css">
<head>
    <meta charset="utf-8">
    <title>アンケートTOP</title>
</head>

<body>
<div class="titlepart text_center">
    <img src="img/starbucks.PNG" alt="starbuckslogo" width="150px">
    <p class="title">STARBUCKS MIL店</p>
</div>


<div class="text_center main_text">
<p>本日はご来店いただきありがとうございました。宜しければ以下から簡単なアンケートにご回答ください。</p>
<a href="kadaipost.php">アンケートに回答する</a>
</div>

<!-- 結果確認にPWを設定する -->
<script type="text/javascript">
   function gate() {
      var UserInput = prompt("パスワードを入力してください","");
      location.href = UserInput + ".php";
   }
</script>

    
</body>

<footer class="footer text_center">
    <p onclick="gate();">管理者画面</p>
    <p>
        Copyright © 2021 Mitsubishi Innovation Lab All Rights Reserved.
    </p>

</footer>