@extends('layouts.app')

@section('title')
    DC - Home
@endsection

@section('main-content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    
                <div class="col">
                    <div class="card">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$comic['title']}}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">{{$comic['series']}}</h6>
                          <p class="card-text">{{$comic['description']}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection