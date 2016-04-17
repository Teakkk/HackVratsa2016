@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Моите CV-та</h2>
                    <a href="{{url('mycvs/create')}}"><button class="btn btn-success btn-md">Създай ново CV</button></a>

                </div>
            </div>
        </div>
    </div>
@endsection