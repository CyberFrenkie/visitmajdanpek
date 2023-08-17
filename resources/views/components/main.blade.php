<nav>
    @include('../partials/_hero')
</nav>

<head>
    
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <hr class="line">
                <h1 class="pre-hero-title">{{ __('content.heroSection.heroTitle') }}</h1>
            </div>
            <div class="col-md-7">
                <p class="pre-hero-paragraph">{{ __('content.heroSection.heroText') }} </p>         
        </div>
    </div>
</div>
<br>
    <div class="container first-container">
        <div class="row">
            <div class="col-md-4">
                <div class="first-hero-img hero-img">
                    <a href="{{ __('content.heroSection2.firstButton.url') }}" class="{{ __('content.heroSection2.firstButton.class') }}">{{ __('content.heroSection2.firstButton.text') }}</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="second-hero-img hero-img">
                <a href="{{ __('content.heroSection2.secondButton.url') }}" class="{{ __('content.heroSection2.secondButton.class') }}">{{ __('content.heroSection2.secondButton.text') }}</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="third-hero-img hero-img">
                <a href="{{ __('content.heroSection2.thirdButton.url') }}" class="{{ __('content.heroSection2.thirdButton.class') }}">{{ __('content.heroSection2.thirdButton.text') }}</a>
                </div>
            </div>
        </div>
    </div>
<br>
<div class="img-fluid first-bg-image">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12 justify-content-start">
                    <h1 class="hero-title">{{ __('content.afterHeroSection.afterHeroTitle') }}</h1>
                </div>
                <div class="col-md-12 justify-content-start">
                    <h3 class="hero-text">{{ __('content.afterHeroSection.afterHeroText') }}</h3>
                </div>
                <div class="col-md-12 justify-content-start">
                    <a href="{{ __('content.afterHeroSection.afterHeroSectionButton.url') }}" class="{{ __('content.afterHeroSection.afterHeroSectionButton.class') }}">{{ __('content.afterHeroSection.afterHeroSectionButton.text') }}</a>
                </div>
        </div>
    </div>
</div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <hr class="line">
                <h3 class="after-hero-title">{{ __('content.afterHeroSection2.afterHeroTitle') }}</h3>
                <br>
                <a href="{{ __('content.afterHeroSection2.afterHeroSectionButton2.url') }}" class="{{ __('content.afterHeroSection2.afterHeroSectionButton2.class') }}">{{ __('content.afterHeroSection2.afterHeroSectionButton2.text') }}</a>
            </div>
            <div class="col-md-7">
                <p class="after-hero-paragraph">Still searching for your dream destination? These articles might help.</p>
            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="../img/default-img.png" alt="#" class="before-footer-image">
                <h3 class="before-footer-title">{{ __('content.beforeFooterSection.beforeFooterSectionTitle1') }}</h3>
                <p class="before-footer-paragraph">{{ __('content.beforeFooterSection.beforeFooterSectionText1') }}</p>
            </div>
            <div class="col-md-4">
                <img src="../img/default-img.png" alt="#" class="before-footer-image">
                <h3 class="before-footer-title">{{ __('content.beforeFooterSection.beforeFooterSectionTitle2') }}</h3>
                <p class="before-footer-paragraph">{{ __('content.beforeFooterSection.beforeFooterSectionText2') }}</p>
            </div>
            <div class="col-md-4">
                <img src="../img/default-img.png" alt="#" class="before-footer-image">
                <h3 class="before-footer-title">{{ __('content.beforeFooterSection.beforeFooterSectionTitle3') }}</h3>
                <p class="before-footer-paragraph">{{ __('content.beforeFooterSection.beforeFooterSectionText3') }}</p>
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>
    