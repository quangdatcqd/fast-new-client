@extends('layouts.main')
@section('main')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('auth.login_register')
            </div>
        </div>
    </div>
@endsection
