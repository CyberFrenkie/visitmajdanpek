@extends('home')

@section('news')

<div class="second-content container-xl ">
    @foreach( __('home.news') as $item )
  
      <hr class="col-md-4 col-sm-12 "> 
      <div class="content-wrap col-12 row mx-1 justify-content-between">
        <h1 class="col-md-6 col-sm-12 news-heading px-0"> {{ $item['heading'] }} </h1>        
        <p class="col-md-6 col-sm-12 news-text px-0"> {{ $item['paragraph'] }} </p>
       
      </div>    
  
      <div class="card-wrap row mx-auto justify-content-between my-5 flex-wrap">
        @foreach ( $news as $content )
          <div class="card col-md-3 col-sm-12">      
            <a href="{{ $content->link }}" class="card-link link" >
              <img src="{{ $content->img }}" alt="" class="card-img">
              <div class="card-content">
                <h1 class="card-info-header m-2"> {{ $content->head }} </h1>
                <p class="card-info-text m-2"> {{ $content->par }} </p>
              </div>          
            </a>      
          </div>
        @endforeach      
      </div>
  
    @endforeach
    <div>
        {{ $news->links() }}            
      </div>
  </div>
  

@endsection
 
