@extends('layouts.app')

@section('content')
<div class="container">
    <div class="single">
        <div class="col-md-6 col-md-offset-3 single_right">
            <div class="login-form-section">
                <div class="login-content">
                    @include('errors.common')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="section-title">
                            <h3>Влезте в своя профил</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" required="required" placeholder="Имейл" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" required="required" name="password" placeholder="Парола" class="form-control">
                            </div>
                        </div>
                        <div class="forgot">
                            <div class="login-check">
                                <label class="checkbox1">
                                    <input type="checkbox" name="checkbox"><i> </i>Запомни ме
                                </label>
                            </div>
                            <div class="login-para">
                                <p><a href="#"> Забравена парола? </a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="login-btn">
                            <input type="submit" value="Вход">
                        </div>
                    </form>
                    <h4>Нямате профил? <a href="{{url('register')}}"> Регистрирайте се сега!</a></h4>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection
