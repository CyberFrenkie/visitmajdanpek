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