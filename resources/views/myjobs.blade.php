@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2>Моите обяви</h2>
                    @if($jobs->count())
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover"
                                   id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Заглавие</th>
                                    <th>Кандидати</th>
                                    <th>Преглеждания</th>
                                    <th>Публикувана на</th>
                                    <th>Опции</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td><a href="#">0 кандидата</a></td>
                                        <td>{{ $job->visits }}</td>
                                        <td>{{ $job->created_at }}</td>
                                        <td>
                                            <a href="#"><i class="fa fa-globe"></i></a>&nbsp;
                                            <a href="{{url('myjobs/'.$job->id.'/edit')}}"><i class="fa fa-pencil"></i></a>&nbsp;
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                    ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">Няма публикувани обяви!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection