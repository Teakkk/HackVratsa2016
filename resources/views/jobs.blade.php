@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            <h2>Обяви за работа</h2>
            <div class="col-md-9 single_right">
                <div class="but_list">
                    @foreach($jobs as $job)
                        <div class="tab_grid">
                            <div class="jobs-item with-thumb">
                                <div class="thumb"><a href="{{url('job/'.$job['id'])}}"><img src="{{asset('/')}}{{$job['logo']}}" alt=""
                                                                    class="img-responsive"></a>
                                </div>
                                <div class="jobs_right">
                                    <div class="date">17 <span>Апр</span></div>
                                    <div class="date_desc">
                                        <h6 class="title"><a href="{{url('job/'.$job['id'])}}">{{$job['title']}}</a></h6>
                                        <a href="#" class="category-info">{{$job['category']}}</a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="description">{{$job['description']}} ... <a href="{{url('job/'.$job['id'])}}" class="read-more">Виж обявата</a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="col_3">
                    <h3 class="categories">Категории</h3>
                    <ul class="categories-list list-group">
                        @foreach($categories as $category)
                            <li><a href="#" class="list-group-item">{{$category->value}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection