@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            <div class="col-md-10 col-md-offset-1">
                <h2>Профил</h2>
                <section class="row">
                    @if(Auth::user()->type == 1)
                        <article class="col-md-4 col-xs-6"><a href="{{url('myjobs/create')}}">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true" class="fa fa-edit fa-2x"></span>
                                        <h2 class="panel-title">Нова обява </h2>
                                    </div>
                                    <div class="panel-body">Напиши нова обява</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="{{url('myjobs')}}">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-folder-open fa-2x"></span>
                                        <h2 class="panel-title">Обяви</h2>
                                    </div>
                                    <div class="panel-body">Моите обяви</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-envelope-o fa-2x"></span>
                                        <h2 class="panel-title">Съобщения</h2>
                                    </div>
                                    <div class="panel-body">Моите съобщения</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-group fa-2x"></span>
                                        <h2 class="panel-title">Кандидати</h2>
                                    </div>
                                    <div class="panel-body">Моите кандидати</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-folder fa-2x"></span>
                                        <h2 class="panel-title">Търси кандидати</h2>
                                    </div>
                                    <div class="panel-body">Търси нови кандидати</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true" class="fa fa-cog fa-2x"></span>
                                        <h2 class="panel-title">Смяна на парола</h2>
                                    </div>
                                    <div class="panel-body">Промени своята прола</div>
                                </div>
                            </a></article>
                    @else
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true" class="fa fa-edit fa-2x"></span>
                                        <h2 class="panel-title">CV-та </h2>
                                    </div>
                                    <div class="panel-body">Моите CV-та</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-folder-open fa-2x"></span>
                                        <h2 class="panel-title"><span
                                                    class='original-title'>Мотивационни писма</span><span
                                                    class='temporary-title'>Мотив. писма</span></h2>
                                    </div>
                                    <div class="panel-body"><span
                                                class='original-body'>Моите мотивационни писма</span><span
                                                class='temporary-body'>Моите мотив. писма</span></div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-envelope-o fa-2x"></span>
                                        <h2 class="panel-title">Съобщения</h2>
                                    </div>
                                    <div class="panel-body">Моите съобщения</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-group fa-2x"></span>
                                        <h2 class="panel-title">Кандидатствания</h2>
                                    </div>
                                    <div class="panel-body">Моите кандидатствания</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true"
                                                                     class="fa fa-folder fa-2x"></span>
                                        <h2 class="panel-title">Абонирания</h2>
                                    </div>
                                    <div class="panel-body">Моите абонирания</div>
                                </div>
                            </a></article>
                        <article class="col-md-4 col-xs-6"><a href="#">
                                <div class="content-wrapper panel panel-default">
                                    <div class="panel-heading"><span aria-hidden="true" class="fa fa-cog fa-2x"></span>
                                        <h2 class="panel-title">Смяна на парола</h2>
                                    </div>
                                    <div class="panel-body">Промени своята прола</div>
                                </div>
                            </a></article>
                    @endif
                </section>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection