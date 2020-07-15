お客様より以下のお問い合わせがありました。<br>
<br>
============================<br>
<br>
お客様のお名前：{{ $content['from_name'] }} <br>
<br>
お客様のメールアドレス：{{ $content['from'] }} <br>
<br>
お問い合わせ内容：<br>
<?php echo nl2br(htmlspecialchars($content['body'])); ?><br>
<br>
============================<br>
<br>
