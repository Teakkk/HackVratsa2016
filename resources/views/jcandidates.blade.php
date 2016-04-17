@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="single">
            @include('errors.common')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3 class="text-center">Кандидати за обява</h3>
                    <h2>{{$job->title}}</h2>
                    @if($jcandidates)
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover"
                                   id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Име</th>
                                    <th>Фамилия</th>
                                    <th>Възраст</th>
                                    <th>Email</th>
                                    <th>CV файл</th>
                                    <th>Кандидатствал на</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                ?>
                                @foreach ($jcandidates as $jcandidate)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $jcandidate->firstname }}</td>
                                        <td>{{ $jcandidate->lastname }}</td>
                                        <td>{{ $jcandidate->age }}</td>
                                        <td>{{ $jcandidate->email }}</td>
                                        <td><button class="btn btn-success btn-md">Изтегли</button></td>
                                        <td>{{ $jcandidate->created_at }}</td>
                                    </tr>
                                    <?php
                                    $i++;
                                    ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">Няма кандидати за тази обява!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection