@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Movies Playing Now</h3></div>

                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="m-3">
                            <a href="{{ route('create') }}">
                                <button type="button" class="btn btn-primary">Add Movie</button>
                            </a>
                        </div>
                    </div>

                    @foreach ($movies as $movie)
                    <div class="card mb-3" style="max-width: 1000px;">
                        <div class="row no-gutters">
                            <div class="col-sm-5" >
                                <img src="{{$movie->movie_poster}}" alt="../../public/img/Image-Not-Available.png"
                                    class="card-img-top h-100"> 
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{$movie->movie_title}}</h5>
                                <p class="card-text">Rating: {{$movie->movie_rating}}</p>
                                <p class="card-text">Genre: {{$movie->genre}}</p>
                                <p class="card-text">Running Time: {{$movie->running_time}}</p>
                                <p class="card-text">Release Date: {{$movie->release_date}}</p>
                                <p class="card-text">Cast: {{$movie->cast}}</p>
                                <p class="card-text">Plot:<br/>{{$movie->plot}}</p>
                                <p class="card-text"><strong>Playing at:</strong> {{$movie->cinema->cinema_name}}</p>
                                <p class="card-text"><strong>Playing on:</strong> {{$movie->time_playing}}</p>
                                <a href="{{ $movie->movie_trailer }}" target="_blank">
                                    <button type="button" class="btn btn-danger">
                                        <img src="https://img.icons8.com/ios-glyphs/20/ffffff/play--v1.png"/>
                                        Watch Trailer
                                    </button>
                                </a>
                                <a href="/edit/{{ $movie->id }}">
                                    {{-- edit button --}}
                                    <img src="https://img.icons8.com/ios-glyphs/30/000000/edit--v1.png"/>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>  
                        
                    @endforeach
                    
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
