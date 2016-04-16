<h3>Описание на обявата</h3>
<div class="form-group">
    {!! Form::label('title','Заглавие') !!}
    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Пример: Продавач, Счетоводител, Senior asp.net developer.']) !!}
</div>
<div class="form-group">
    {!! Form::label('cat_id','Категория') !!}
    {!! Form::select('cat_id', $categories, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Описание') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('jobtype_id','Вид на заетост') !!}
    {!! Form::select('jobtype_id', $jobtypes, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('jobterm_id','Срок на заетост') !!}
    {!! Form::select('jobterm_id', $jobterms, null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('clevel_id','Ниво в йерархията') !!}
    {!! Form::select('clevel_id', $clevels, null, ['class'=>'form-control']) !!}
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