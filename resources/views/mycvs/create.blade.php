@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Ново CV</h2>
                    {!! Form::open(array('url' => 'mycvs', 'files' => true)) !!}
                    @include('mycvs.partials')
                    {!! Form::submit('Добави своето CV', ['class'=>'btn btn-success btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection