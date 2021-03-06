
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   @if(!isset($data)) 
                     {{Custom::getCinemaName($cinema[0]->cinema_id)}} Cinema 
                   @endif 
                   
        
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            
                    <div>
                    @if(!isset($data))
                       @foreach($cinema as $showtime)
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    
                                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{ Storage::url($showtime->movie->image) }}" style="width: 100%; height: 450px;">

                                    <h3><strong class="d-inline-block mb-2 text-success">{{$showtime->movie->title}}</strong><h3>
                                    <h6 class="mb-0">
                                        <a class="text-dark" href="#">Showing on: <strong>  {{date('d-m-Y', strtotime($showtime->show_date))}}</strong></a>
                                    </h6>
                                    <h6 class="mb-0">
                                        <a class="text-dark" href="#">Showing at: <strong>  {{$showtime->show_time}} </strong></a>
                                    </h6>
                                    <hr>

                                    <div>
                                        <p class="card-text mb-auto">Description: <strong> {{str_limit($showtime->movie->description, $limit = 130, $end = '...') }} </strong></p>
                                    </div>
                                    <hr>

                                    <h6 class="mb-0">
                                    Realased on:  <strong> {{$showtime->movie->released_date}} </strong>
                                    </h6>
                                    <h6 class="mb-0">
                                    Duration:      <strong> {{$showtime->movie->length}} </strong>
                                    </h6>
                                    <h6 class="mb-0">
                                    Directed by: <strong> {{$showtime->movie->director_name}} </strong>
                                    </h6>
                                </div>
                            </div>
                        </div>
                       @endforeach  
                    @else
                        <div class="col-md-12">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h3>No movies added to this Cinema yet!</h3>
                                    <a href="{{route('show_form_movie')}}">click here to add a movie</a>
                                </div>
                            </div>
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










    


