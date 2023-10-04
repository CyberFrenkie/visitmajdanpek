<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach( __('hero.slides') as $slides )
      <div class="{{ $slides['class'] }}">
        <div class="video-wrap">
          <video autoplay loop muted playsinline id="video-background">
            <source src="{{ $slides['vid']['src'] }}" type="video/mp4" class="{{ $slides['vid']['class'] }}" alt="{{ $slides['vid']['alt'] }}">
          </video>
        </div>

        <div class="img-wrap">
          <img class="{{ $slides['img']['class'] }}" src="{{ $slides['img']['src'] }}" alt="{{ $slides['img']['alt'] }}">
        </div>
        
        <div class="{{ $slides['text']['class'] }}">
          <h1 class="{{ $slides['text']['title']['class'] }}">{{ $slides['text']['title']['text'] }}</h1>
          <p class="{{ $slides['text']['lead']['class'] }}">{{ $slides['text']['lead']['text'] }}</p>
          <a href="{{ $slides['text']['link'] }} " class="{{ $slides['text']['cta']['class'] }} ">{{ $slides['text']['cta']['text'] }}<i class="{{ trans('custom-footer.arrow-icon') }} ms-2 arrow-right"></i></a>
        </div>
      </div>
    @endforeach
  </div>

  @foreach( __('hero.controls') as $control )
    <button class="{{ $control['class'] }}" type="button" data-bs-target="#carouselExample" data-bs-slide="{{ $control['slide'] }}">
      <span class="{{ $control['icon'] }}" aria-hidden="true"></span>
      <span class="visually-hidden">{{ $control['label'] }}</span>
    </button>
  @endforeach
</div>