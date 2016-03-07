@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Empleados</strong><a class="pull-right" href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-plus"></i></a></div>

                <div class="panel-body">
                    <table class="table table-striped table-hover table-condensed">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>Identificación</th>
                            <th>SSN</th>
                            <th>Cargo</th>
                            <th>Móvil</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee) 
                                <tr>
                                    <td>
                                        <a class="pull-right" href="{{ url('/employee/' . $employee->id . '/edit') }}"><i class="fa fa-btn fa-edit"></i></a>
                                    </td>
                                    <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                                    <td>{{ $employee->identification }}</td>
                                    <td>{{ $employee->ssn }}</td>
                                    <td>{{ $employee->ssn }}</td>
                                    <td>{{ $employee->phone_mobile }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection