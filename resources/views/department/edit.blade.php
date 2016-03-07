@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Departamentos</strong></div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/department/' . $departments->id ) }}">
                    <input name="_method" type="hidden" value="PUT">
                    {!! csrf_field() !!}

                        <input type="hidden" class="form-control" name="id" value="{{ $departments->id }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Descripción {{ $departments->id }} {{ $departments->department_id }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" value="{{ $departments->description }}">

                                @if ($errors->has('ssn'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('description') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Pertenece a</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department_id">
                                    @foreach ($departmentsall as $departmentall) 
                                        {{ $departmentall->id }} {{ $departments->department_id}}
                                        @if ($departmentall->id = $departments->department_id)
                                            <option value="{{ $departmentall->id }}" selected>{{ $departmentall->description }}</option>
                                        @else
                                            <option value="{{ $departmentall->id }}">{{ $departmentall->description }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @foreach ($departmentsall as $departmentall) 
                                        {{ $departmentall->id }} {{ $departments->department_id}}
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Salvar
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 