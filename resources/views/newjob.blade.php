@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.common')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New</div>

                    <div class="panel-body">
                        {!! Form::open(array('url' => 'newjob', 'files' => true)) !!}
                        <h3>Описание на обявата</h3>
                        <div class="form-group">
                            {!! Form::label('title','Заглавие') !!}
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Пример: Продавач, Счетоводител, Senior asp.net developer.']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category','Категория') !!}
                            {!! Form::select('category', $categories, 0, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description','Описание') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('jobtype','Вид на заетост') !!}
                            {!! Form::select('jobtype', $jobtypes, 0, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('jobterm','Срок на заетост') !!}
                            {!! Form::select('jobterm', $jobterms, 0, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('clevel','Ниво в йерархията') !!}
                            {!! Form::select('clevel', $clevels, 0, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('salary_from','Заплата от') !!}
                            {!! Form::text('salary_from', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('salary_to','Заплата до') !!}
                            {!! Form::text('salary_to', null, ['class'=>'form-control']) !!}
                        </div>
                        <h3>Данни за контакт</h3>
                        <div class="form-group">
                            {!! Form::label('firm_name','Фирма') !!}
                            {!! Form::text('firm_name', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contact_name','Лице за контакт') !!}
                            {!! Form::text('contact_name', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone','Телефон') !!}
                            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email','Имейл') !!}
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address','Адрес') !!}
                            {!! Form::text('address', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo','Лого') !!}
                            {!! Form::file('logo', null) !!}
                        </div>
                        {!! Form::submit('Публикувай обявата', ['class'=>'btn btn-success btn-lg']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection