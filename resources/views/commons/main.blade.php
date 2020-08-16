{{-- フラッシュ・メッセージ --}}
@if (session('my_status'))
<div class="container mt-2">
  <div class="alert alert-danger">
    {{ session('my_status') }}
  </div>
</div>
@endif


<section class="top">
  <div class="container">
    <img class="d-block w-100" src="{{ asset('image/top_image.jpg') }}" alt="top">
  </div>
</section>

<section class="main mt-5">
  <div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('image/main_image_01.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/main_image_02.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/main_image_03.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/main_image_04.jpg') }}" alt="Fourth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>



<section class="about py-5">
  <div class="container">
    <h2 class="text-center mb-5 p-3 text-dark">HAKKUTSUとは<br>ー Concept ー</h2>
    <div class="row">
      <img class="concept_visual_01 w-50" src="{{ asset('image/concept_visual_01.jpg') }}" alt="Card image cap">
      <div class="col-md-6 d-flex align-items-center">
        <p class="about_text">
          全国にはあなたが知らない地域ブランドが数多く眠っています。
          少しでも多くの人達に地域ブランドの魅力を広めて地域に貢献したい！
          そんな思いで私たちは地域ブランドの原石を発掘するサイト『HAKKUTSU』を立ち上げました。
        </p>
      </div>

      <div class="col-md-6 d-flex align-items-center">
        <p class="about-text">
          肉や魚、野菜や果物など、全国各地の選りすぐりの商品からご購入いただけます。
          私たちが商品を購入することで『地域の活性化』に繋がり
          『地域を応援する』きっかけになれば、これほど嬉しいことはありません。
        </p>
      </div>
      <img class="concept_visual_02 w-50 mt-5" src="{{ asset('image/concept_visual_02.jpg') }}" alt="Card image cap">
    </div>
  </div>
</section>



<section class="news">
  <div class="container">
    <h2 class="text-center mb-5 p-3 text-dark">新着特集<br>ー News ー</h2>
    <div class="card-deck">
      <div class="card">
        <img src="{{ asset('image/card_img.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="{{ asset('image/card_img.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="{{ asset('image/card_img.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</section>