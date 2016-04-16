@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Нова обява</h2>
                    {!! Form::open(array('url' => 'myjobs', 'files' => true)) !!}
                    @include('myjobs.partials')
                    {!! Form::submit('Публикувай обявата', ['class'=>'btn btn-success btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection