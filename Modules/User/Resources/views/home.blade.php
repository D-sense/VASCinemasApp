@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to VASCON Cinema Application Demo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Kindly, make use of the navbar links to navigate around</h4>
                    <strong>Developed: Adeshina Hammed H. </strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
