@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Редактиране на обява</h2>
                            {!! Form::model($job, ['method'=>'PUT', 'action' => ['JobsController@update', $job->id]]) !!}
                            @include('myjobs.partials')
                            {!! Form::submit('Редактирай обявата', ['class'=>'btn btn-primary btn-lg']) !!}
                            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection