@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Вашето CV</h2>
                    {!! Form::model($mycv, ['method'=>'PUT', 'action' => ['CvsController@update', $mycv->id]]) !!}
                    @include('mycvs.partials')
                    {!! Form::submit('Редактирай CV-то', ['class'=>'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection