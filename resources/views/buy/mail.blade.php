<div>
    {{ $order->  name }}様</br></br>

    地域ブランドの原石を発掘するサイト【HAKKUTSU】をご利用いただき、誠にありがとうございます。
    ご注文を承りましたので、ご連絡いたします。
</div>
<ul>
<div></br>
    注文の詳細</br>
    [注文時刻]</br>
    {{ $order -> created_at }}</br>
    [注文金額]</br>
    {{ $order -> total }}円</br>
    [配送先]</br>
    〒{{ $order -> destination_postal_code }}</br>
    {{ $order -> destination }}</br></br>
</div>
<ul>
<div>
    今後とも【HAKKUTSU】をよろしくお願いいたします。
</div>

