

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Details of <strong> {{$movie->title}} </strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{ Storage::url($movie->image) }}" style="width: 500px; height: 450px;">

                                <strong class="d-inline-block mb-2 text-success">{{$movie->title}}</strong>

                                <div class="mb-1 text-muted small"><strong>Released on</strong> {{$movie->released_date}}</div>
                                <p class="card-text mb-auto"><strong>Description</strong>: {{ $movie->description }}</p>
                                <hr>
                                <h6 class="mb-0">
                                    <a class="text-dark" href="#"><strong>Directed by: {{$movie->director_name}}</strong>:  </a>
                                </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection









