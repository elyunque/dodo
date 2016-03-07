@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Departamentos</strong><a class="pull-right" href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-plus"></i></a></div>

                <div class="panel-body">
                    <table class="table table-striped table-hover table-condensed">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Departamento</th>
                            <th>Pertence a</th>
                            <th>Pertence a</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department) 
                                <tr>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a class="pull-right" href="{{ url('/department/' . $department->id . '/edit') }}"><i class="fa fa-btn fa-edit"></i></a>
                                    </td>
                                    <td>{{ $department->description }}</td>
                                    </td>
                                        @if ($department->department_id > 0) 
                                            <td>{{ $department->parentDepartment->description }}</td>
                                            @if ($department->parentDepartment->department_id > 0) 
                                                <td>{{ $department->parentDepartment->parentDepartment->description }}</td>
                                            @else
                                                <td>-</td>
                                            @endif
                                        @else
                                            <td>-</td>
                                            <td>-</td>
                                        @endif                                                                        
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