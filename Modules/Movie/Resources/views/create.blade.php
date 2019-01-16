
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submit a Movie to VSC Cinema</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('store_movie') }}" enctype="multipart/form-data">
                        @csrf
                        <h4>Movie Details</h4>

                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-left">{{ __('Title of Movie') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="length" class="col-md-3 col-form-label text-md-left">{{ __('Length') }}</label>

                            <div class="col-md-6">
                                <input id="length" type="text" class="form-control{{ $errors->has('length') ? ' is-invalid' : '' }}" name="length" value="{{ old('length') }}" required autofocus>

                                @if ($errors->has('length'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('length') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-3 col-form-label text-md-left">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required autofocus>

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-3 col-form-label text-md-left">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="director_name" class="col-md-3 col-form-label text-md-left">{{ __('Name of Director') }}</label>

                            <div class="col-md-6">
                                <input id="director_name" type="text" class="form-control{{ $errors->has('director_name') ? ' is-invalid' : '' }}" name="director_name" value="{{ old('director_name') }}" required autofocus>

                                @if ($errors->has('director_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('director_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-left">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus> {{ old('description') }} </textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label text-md-left">{{ __('Upload Photo') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <h4>Cinema Showtime</h4>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <!-- <input type="hidden"  name="length" value="ozone"> -->

                                <h4><label for="showtime" class="col-form-label"><span class="badge badge-pill badge-success">{{ __('Ozone Cinema') }}</span></label></h4>
                                <div class="row col-md-12 offset-md-2">
                                    <p>Show Date: <input id="ozone_show_date" type="text" class="col-md-5 col-form-label {{ $errors->has('ozone_show_date') ? ' is-invalid' : '' }}" name="ozone_show_date" value="{{ old('ozone_show_date') }}" required autofocus></p>
                                    <p>Show Time: <input type="text" class="col-md-5 col-form-label  {{ $errors->has('ozone_show_time') ? ' is-invalid' : '' }}" name="ozone_show_time" value="{{ old('ozone_show_time') }}" required autofocus></p>
                                </div>
                                
                                @if ($errors->has('ozone_show_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ozone_show_date') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('ozone_show_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ozone_show_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <!-- <input type="hidden"  name="cinema_name" value="ozone"> -->

                                <h4><label for="showtime" class="col-form-label"><span class="badge badge-pill badge-success">{{ __('Filmhouse Cinema') }}</span></label></h4>
                                <div class="row col-md-12 offset-md-2">
                                    <p>Show Date: <input id="filmhouse_show_date" type="text" class="col-md-5 col-form-label {{ $errors->has('filmhouse_show_date') ? ' is-invalid' : '' }}" name="filmhouse_show_date" value="{{ old('filmhouse_show_date') }}" required autofocus></p>
                                    <p>Show Time: <input type="text" class="col-md-5 col-form-label  {{ $errors->has('filmhouse_show_time') ? ' is-invalid' : '' }}" name="filmhouse_show_time" value="{{ old('filmhouse_show_time') }}" required autofocus></p>
                                </div>
                                
                                @if ($errors->has('filmhouse_show_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('filmhouse_show_date') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('filmhouse_show_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('filmhouse_show_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-12">
                                <!-- <input type="hidden"  name="cinema_name" value="ozone"> -->

                                <h4><label for="ground_zero_show_date" class="col-form-label"><span class="badge badge-pill badge-success">{{ __('Ground zero Cinema') }}</span></label></h4>
                                <div class="row col-md-12 offset-md-2">
                                    <p>Show Date: <input id="ground_zero_show_date" type="text" class="col-md-5 col-form-label {{ $errors->has('ground_zero_show_date') ? ' is-invalid' : '' }}" name="ground_zero_show_date" value="{{ old('ground_zero_show_date') }}" required autofocus></p>
                                    <p>Show Time: <input type="text" class="col-md-5 col-form-label  {{ $errors->has('ground_zero_show_time') ? ' is-invalid' : '' }}" name="ground_zero_show_time" value="{{ old('ground_zero_show_time') }}" required autofocus></p>
                                </div>
                                
                                @if ($errors->has('ground_zero_show_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ground_zero_show_date') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('ground_zero_show_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ground_zero_show_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-success col-md-8">
                                    {{ __('SUBMIT') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






