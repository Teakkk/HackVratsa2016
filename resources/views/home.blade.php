@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="container">
            <div id="search_wrapper">
                <div id="search_form" class="clearfix">
                    <h1>Търсене в <span class='number-of-ads'>15</span> обяви за работа</h1>
                    <p>
                        <input type="text" placeholder=" " value="Търсене по дума..." onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Търсене по дума...';}" class="text">
                        <label class="btn2 btn-2 btn2-1b">
                            <button type="submit" value=""><span aria-hidden="true" class="fa fa-search"></span>
                            </button>
                        </label>
                    </p>
                    <h2 class="title">Топ категории за обяви</h2>
                </div>
                <div id="categories" class="clearfix">
                    <ul class="orange">
                    <?php
                    $i = 0;
                    ?>
                    @foreach($categories as $cat)
                        <?php

                        if ($i == 8) {
                            $i=0;
                            echo '</ul><ul class="orange">';
                        }
                            $i++;
                        ?>
                        <li><a href="#">{{$cat->value}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="single">
            <div class="col-md-12">
                <h3>Последни обяви</h3>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>Заглавие</td>
                        <td>Категория</td>
                        <td>Дата</td>
                    </tr>
                    <tbody>
                    @foreach($lastjobs as $lastjob)
                    <tr>
                        <td><a href="{{url('job/'.$lastjob->id)}}">{{$lastjob->title}}</a></td>
                        <td><a href="#">{{$lastjob->value}}</a></td>
                        <td>{{$lastjob->created_at}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center"><a href="{{url('jobs')}}" role="button" class="btn btn-default">Виж всички</a></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
