@extends('cinema::layouts.master')

@section('content')
    <h1>Hello World</h1>

    @forelse($cinemas as $cinema)
     {{$cinema->name}}
    @empty
     No Cinema added yet.
    @endforelse
    <p>
        This view is loaded from module: {!! config('cinema.name') !!}
    </p>
@stop
