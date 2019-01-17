
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Movies in VSC Cinema Web Application</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse($movies as $movie)
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-success">{{$movie->title}}</strong>
                                    
                                    <h6 class="mb-0">
                                        <a class="text-dark" href="#">Showing in this cinema: </a>
                                    </h6>

                                    <div class="mb-1 text-muted small">{{$movie->released_date}}</div>
                                
                                    <p class="card-text mb-auto">{{str_limit($movie->description, $limit = 130, $end = '...') }}</p>
                                    <a class="btn btn-outline-success btn-sm" href="{{route('show_movie', ['id'=> $movie->id])}}">Continue reading</a>
                                
                                </div>
                                <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{ Storage::url($movie->image) }}" style="width: 200px; height: 250px;">

                            </div>
                        </div>

                        @empty
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3>No movies added yet!</h3>
                                    <a href="{{route('show_form_movie')}}">click here to add a movie</a>
                                </div>
                            </div>
                        </div>
                    @endforelse  
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection






