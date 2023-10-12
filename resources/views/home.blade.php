@extends('layouts.app')

@section('title')
    DC - Home
@endsection

@section('main-content')
    <div class="main-wrapper">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    
                <div class="col-2 g-3">
                    <div class="card h-100">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$comic['title']}}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic['series']}}</h6>
                          <p class="card-text">{{$comic['price']}}</p>
                        </div>
                      </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <div class="cardbar-wrapper">
        <div class="container">
            @foreach ($linkCards as $link)
            <div class="link-card">
              <div class="miniature">
                <img src="" alt="">
              </div>
              <span>
                {{ $link['name'] }}
              </span>
            </div>
            @endforeach
        </div>
    </div>
@endsection