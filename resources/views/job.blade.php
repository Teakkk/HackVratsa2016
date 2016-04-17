@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            <div class="col-md-9 single_right">
                @include('errors.common')
                <h2>{{$job[0]->title}}</h2>
                <h3>Обща информация</h3>
                <p><strong>Категория:</strong> {{$job[0]->cat_name}}</p>
                <p><strong>Вид на заетост:</strong> {{$job[0]->jobtype_name}}</p>
                <p><strong>Тип на заетост:</strong> {{$job[0]->jobterm_name}}</p>
                <p><strong>Ниво в йерархията:</strong> {{$job[0]->clevel_name}}</p>
                @if($job[0]->salary_from > 0)
                    <p><strong>Заплата:</strong> от {{$job[0]->salary_from}} до {{$job[0]->salary_to}} лв. на месец</p>
                @endif
                <p><strong>Дата на публикуване:</strong> {{$job[0]->created_at}}</p>
                <p><strong>Преглеждания:</strong> {{$job[0]->visits}}</p>
                <h3>Описание</h3>
                <p>{{$job[0]->description}}</p>

                @if (Auth::guest())
                    <div class="alert alert-info">За да кандидаствате за обявата трябва да сте влезли в акаунта си!
                    </div>
                @else
                    @if( Auth::user()->type == 1)
                        <div class="alert alert-info">
                            Трябва да сте "търсещ работа" за да кандидаствате за обявата!
                        </div>
                    @else
                        <a href="{{url('job/'.$job[0]->id.'/candidate')}}">
                            <button class="btn btn-success btn-lg center-block">Кандидаствай</button>
                        </a>
                    @endif
                @endif
            </div>
            <div class="col-md-3">
                @if($job[0]->logo)
                    <img src="{{asset('/')}}{{$job[0]->logo}}" alt="" class="img-responsive">
                @else
                    <img src="{{asset('/logos/nologo.png')}}" alt="" class="img-responsive">
                @endif
                <table class="condidate_detail">
                    <h4>Данни за контакт</h4>
                    <tbody>
                    <tr>
                        <td>Фирма</td>
                        <td>{{$job[0]->firm_name}}</td>
                    </tr>
                    <tr>
                        <td>Лице за контакт</td>
                        <td>{{$job[0]->contact_name}}</td>
                    </tr>
                    <tr>
                        <td>Имейл</td>
                        <td>{{$job[0]->email}}</td>
                    </tr>
                    <tr>
                        <td>Телефон</td>
                        <td>{{$job[0]->phone}}</td>
                    </tr>
                    <tr>
                        <td>Адрес</td>
                        <td>{{$job[0]->address}}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="map_1">
                    <iframe src="https://www.google.com/maps/embed/v1/place?q=Враца,+България&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection