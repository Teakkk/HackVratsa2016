<div class="form-group">
    {!! Form::label('firstname','Име') !!}
    {!! Form::text('firstname', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lastname','Фамилия') !!}
    {!! Form::text('lastname', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('age','Възраст') !!}
    {!! Form::text('age', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email','Имейл') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cvfile','CV файл') !!}
    {!! Form::file('cvfile', null) !!}
</div>