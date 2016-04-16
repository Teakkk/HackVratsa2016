@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        @if(Auth::user()->type == 1)
                            <p><a href="{{url('newjob')}}">Нова обява</a></p>
                            <p><a href="#">Моите обяви</a></p>
                            <p><a href="#">....</a></p>
                            <p><a href="#">...</a></p>
                            <p><a href="#">...</a></p>
                            <p><a href="#">...</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection