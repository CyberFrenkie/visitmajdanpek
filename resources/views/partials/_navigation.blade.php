<nav class="navbar navbar-expand-xl navbar-dark bg-body-tertiary nav-section">
    <div class="container-fluid nav-box">
        <img src="img/layout/logo.png" class="img-fluid nav-img">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-container" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @foreach( __('nav.list') as $list)
                    <li class="{{ $list['class'] }}">
                        <a href="{{ $list['button']['url'] }}" class="{{ $list['button']['class'] }}">
                            {{ $list['button']['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="row">
            <a href="#" class="icon icon-lang">EN</a>
            <a href="#" class="icon-search"></a>
        </div>
    </div>
</nav>