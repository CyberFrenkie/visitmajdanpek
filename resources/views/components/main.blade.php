{{-- First Trending section --}}
<div class="first-content container-xl my-5">
  @foreach( __('home.article') as $article )
  <hr class="seperator col-md-4 col-sm-12">

  <div class="content-wrap col-12 px-3 row justify-content-between">
    <h1 class="col-md-4 col-sm-12 card-heading">{{ $article['heading'] }}</h1>
    <p class="col-md-6 col-sm-12 card-text">{{ $article['paragraph'] }}</p>
  </div>

  <div class="row card-wrap justify-content-between my-5 mx-auto flex-wrap">
    @foreach ( ($article['btn']) as $btn)
    <div class="card col-md-4 col-sm-12 mx-auto">
      <a href="{{ $btn['link'] }}" class="link">
        <img src="{{ $btn['img'] }}" alt="" class="card-img">
        <p class="card-header">{{ $btn['text'] }}</p>
      </a>
    </div>
    @endforeach
  </div>
  @endforeach
</div>

{{-- Slide section --}}
<div class="hero-mid my-5">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      @foreach( __('home.hero.carousel.indicators') as $index => $indicator)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $indicator['class'] }}" aria-current="{{ $indicator['class'] === 'active' ? 'true' : 'false' }}" aria-label="{{ $indicator['label'] }}"></button>
      @endforeach
    </div>

    <div class="carousel-inner">
      @foreach( __('home.hero.carousel.slides') as $index => $slide)
      <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">

        <img src="{{ $slide['img'] }}" class="d-block w-100 h-100" alt="Carousel Image">

        <div class="slide-link">
          <h1 class="slide-title">{{ $slide['title'] }}</h1>
          <p class="slide-text">{{ $slide['text'] }}</p>
          <a href="{{ $slide['button_link'] }}" class="btn readMore">{{ $slide['button_text'] }} <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>

    @foreach( __('home.hero.carousel.controls') as $controlKey => $control)
    <button class="{{ $control['class'] }}" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="{{ $control['slide'] }}">
      <span class="{{ $control['icon'] }}" aria-hidden="true"></span>
      <span class="visually-hidden">{{ __($control['label']) }}</span>
    </button>
    @endforeach
  </div>
</div>

{{-- Third section is on news.blade.php --}}
<div class="container-xl">
  <hr class="col-md-4 col-sm-12">
  <div class="content-wrap col-12 row mx-1 justify-content-between">
    <h1 class="col-md-6 col-sm-12 news-heading px-0">{{__('news.news.head')}}</h1>
  </div>

  <div class="news-card-wrap row mx-auto justify-content-between my-5 flex-wrap">
    @php $count = 0 @endphp
    @foreach (__('news.news.content') as $item)
    @if($count < 3) <div class="card col-md-3 col-sm-12 news-card">
      <a href="/news" class="card-link link">
        <img src="{{ $item['img'] }}" alt="" class="news-card-img">
        <div class="card-content">
          <h1 class="card-info-header m-2">{{ $item['head'] }}</h1>
          <p class="card-info-text m-2">{{ $item['par'] }}</p>
        </div>
      </a>
  </div>
  @endif
  @php $count++ @endphp
  @endforeach
</div>
<a href="/news" class="btn readMore newsBtn">{{ __('news.news.btn_text') }}<i class="fa-solid fa-arrow-right"></i></a>
</div>