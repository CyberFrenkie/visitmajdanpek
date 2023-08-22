<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
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

    @foreach( __('hero.controls') as $control )
        <button class="{{ $control['class'] }}" type="button" data-bs-target="#carouselExample" data-bs-slide="{{ $control['slide'] }}">
            <span class="visually-hidden">{{ $control['label'] }}</span>
        </button>
    @endforeach
</div>