@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.common')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New</div>

                    <div class="panel-body">
                        {!! Form::open(array('url' => 'myjobs', 'files' => true)) !!}
                        @include('myjobs.partials')
                        {!! Form::submit('Публикувай обявата', ['class'=>'btn btn-success btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection