<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        @foreach( __('hero.slides') as $slides )
            <div class="{{ $slides['class'] }}">
                <img class="{{ $slides['img']['class'] }}" src="{{ $slides['img']['src'] }}" alt="{{ $slides['img']['alt'] }}">

                <div class="{{ $slides['text']['class'] }}">
                    <h1 class="{{ $slides['text']['title']['class'] }}">{{ $slides['text']['title']['text'] }}</h1>
                    <p class="{{ $slides['text']['lead']['class'] }}">{{ $slides['text']['lead']['text'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>