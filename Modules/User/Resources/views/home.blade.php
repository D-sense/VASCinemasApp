@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To VSC Cinema Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You have added ...... movies so far!
                    <button type="button" class="btn btn-primary">
                        Notifications <span class="badge badge-light">4</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
