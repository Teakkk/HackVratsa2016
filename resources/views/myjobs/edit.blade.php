@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.common')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit job</div>

                    <div class="panel-body">
                        {!! Form::model($job, ['method'=>'PUT', 'action' => ['JobsController@update', $job->id]]) !!}
                        @include('myjobs.partials')
                        {!! Form::submit('Редактирай обявата', ['class'=>'btn btn-primary btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection