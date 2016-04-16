@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single single-register">
            <div class="form-container">
                <h2>Регистрация</h2>
                @include('errors.common')
                <form method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="email" class="col-md-3 control-lable">Имейл</label>
                            <div class="col-md-9">
                                <input id="email" type="email" path="email" name="email" class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="password" class="col-md-3 control-lable">Парола</label>
                            <div class="col-md-9">
                                <input id="password" type="password" path="password" name="password"
                                       class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="password" class="col-md-3 control-lable">Повторете паролата</label>
                            <div class="col-md-9">
                                <input id="password" type="password" path="password" name="password_confirmation"
                                       class="form-control input-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="type" class="col-md-3 control-lable">Искам да се регистрирам, като:</label>
                            <div class="col-md-9">
                                <select id="type" path="type" name="type" class="form-control input-sm">
                                    <option value="" disabled selected>Изберете вашата опция</option>
                                    <option value="1">Фирма / Работодател</option>
                                    <option value="2">Търсещ работа</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 pull-right">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">Запознат съм и приемам <a href='#' target='_blank'>Общите
                                        условия</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row submit-btn-wrapper">
                        <div class="form-actions floatRight">
                            <input type="submit" value="Регистрация" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
