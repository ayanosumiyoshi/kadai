<html>
<link rel="stylesheet" href="./css/style_kadaipost.css">
<head>
	<meta charset="utf-8">
	<title>アンケート回答</title>
</head>

<body>

<p class="title wrapper">STARBUCKS MIL店 ご来店アンケート</p>
<p class="expl wrapper">本日のご来店の率直なご感想をお聞かせください。</p>

<form action="kadaiwrite.php" method="post" class="wrapper">
    <dl class="formpart">
        <dt class="form_label">氏名：</dt>
        <dd class="form_content"><input type="text" name="name"></dd>
        <dt class="form_label">e-mail：</dt>
        <dd class="form_content"><input type="text" name="mail"></dd>
        <dt class="form_label">総合評価：</dt>
        <dd class="form_content">
            <label><input type="radio" name="rate" value="5">5</label>
            <label><input type="radio" name="rate" value="4">4</label>
            <label><input type="radio" name="rate" value="3">3</label>
            <label><input type="radio" name="rate" value="2">2</label>
            <label><input type="radio" name="rate" value="1">1</label>
        </dd>
        <dt class="form_label">接客：</dt>
        <dd class="form_content">
            <label><input type="radio" name="taste" value="5">5</label>
            <label><input type="radio" name="taste" value="4">4</label>
            <label><input type="radio" name="taste" value="3">3</label>
            <label><input type="radio" name="taste" value="2">2</label>
            <label><input type="radio" name="taste" value="1">1</label>
        </dd>
        <dt class="form_label">雰囲気：</dt>
        <dd class="form_content">
            <label><input type="radio" name="mood" value="5">5</label>
            <label><input type="radio" name="mood" value="4">4</label>
            <label><input type="radio" name="mood" value="3">3</label>
            <label><input type="radio" name="mood" value="2">2</label>
            <label><input type="radio" name="mood" value="1">1</label>
        </dd>
        <dt class="form_label">その他感想：</dt>
        <dd  class="form_content"><textarea name="comment" id="comment" cols="50" rows="5"></textarea></dd>
    </dl>
	<input type="submit" value="送信">
</form>

</body>

<footer class="footer text_center">
    <p>
        Copyright © 2021 Mitsubishi Innovation Lab All Rights Reserved.
    </p>

</footer>

</html>