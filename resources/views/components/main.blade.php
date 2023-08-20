{{-- First Trending section --}}

<div class="first-content container-xl my-5 row mx-auto justify-content-between">

    @foreach( __('home.article') as $article )
  
      <h1 class="col-4 card-heading"> {{ $article['heading'] }} </h1>
  
      <p class="col-6 card-text"> {{ $article['paragraph'] }} </p>
  
      <div class="row card-wrap justify-content-between my-5 mx-auto"> 
  
        @foreach ( ($article['btn']) as $btn)
  
          <div class="card col-md-4 col-sm-12">
  
            <a href="{{ $btn['link'] }}" class="link">
  
              <img src="{{ $btn['img'] }}" alt="" class="card-img">
  
              <p class="card-header"> {{ $btn['text'] }} </p>
  
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
  
                  <img src="{{ __('home.hero.carousel.image.src') }}" class="{{ __('home.hero.carousel.image.class') }}" alt="{{ __('home.her.carousel.image.alt') }}">
  
                  <div class="slide-link">
                    
                      <h1 class="slide-title">{{ $slide['title'] }}</h1>
  
                      <p class="slide-text">{{ $slide['text'] }}</p>
  
                      <a class="{{ $slide['button_class'] }} link">{{ $slide['button_text'] }}</a>
  
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
  