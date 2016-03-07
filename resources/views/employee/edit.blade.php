@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Empleados</strong><button class="pull-right" href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-plus"></i> Vacaciones</button></div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/employee/' . $employees->id ) }}">
                    <input name="_method" type="hidden" value="PUT">
                    {!! csrf_field() !!}

                        <input type="hidden" class="form-control" name="id" value="{{ $employees->id }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">SSN</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="ssn" value="{{ $employees->ssn }}">

                                @if ($errors->has('ssn'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('ssn') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombres</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="firstname" value="{{ $employees->firstname }}" autofocus>

                                @if ($errors->has('firstname'))                                
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('firstname') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Apellidos</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="lastname" value="{{ $employees->lastname }}">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('lastname') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Cédula</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="identification" value="{{ $employees->identification }}">

                                @if ($errors->has('identification'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('identification') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de Nacimiento</label>
                            <div class="col-md-2">
                                <input type="date" class="form-control" name="birthday" value="{{ $employees->birthday }}">

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('birthday') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teléfonos</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teléfono Hogar</label>
                            <div class="col-md-3">                                
                                <input type="number" class="form-control" name="phone_home" value="{{ $employees->phone_home }}">

                                @if ($errors->has('phone_home'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('phone_home') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teléfono Móvil</label>
                            <div class="col-md-3">                                
                                <input type="number" class="form-control" name="phone_mobile" value="{{ $employees->phone_mobile }}">

                                @if ($errors->has('phone_mobile'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('phone_mobile') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teléfono Familiar</label>
                            <div class="col-md-3">                                
                                <input type="number" class="form-control" name="phone_related" value="{{ $employees->phone_related }}">

                                @if ($errors->has('phone_related'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('phone_related') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Teléfono Extra</label>
                            <div class="col-md-3">                                
                                <input type="phone" class="form-control" name="phone_extra" value="{{ $employees->phone_extra }}">

                                @if ($errors->has('phone_extra'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('phone_extra') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correos Electrónicos</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo Electrónico Hogar</label>
                            <div class="col-md-4">                                
                                <input type="email" class="form-control" name="email_home" value="{{ $employees->email_home }}">

                                @if ($errors->has('email_home'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('email_home') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo Electrónico Extra</label>
                            <div class="col-md-4">                                
                                <input type="email" class="form-control" name="email_extra" value="{{ $employees->email_extra }}">

                                @if ($errors->has('email_extra'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('email_extra') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Direcciones</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Dirección Hogar</label>
                            <div class="col-md-6">                                
                                <input type="text" class="form-control" name="address_home" value="{{ $employees->address_home }}">

                                @if ($errors->has('address_home'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('address_home') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Dirección Extra</label>
                            <div class="col-md-6">                                
                                <input type="text" class="form-control" name="address_extra" value="{{ $employees->address_extra }}">

                                @if ($errors->has('address_extra'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('address_extra') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Datos Familiar</label>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Esposo/a</label>
                            <div class="col-md-6">
                                <input type="name" class="form-control" name="related_info" value="{{ $employees->related_info }}">

                                @if ($errors->has('related_info'))
                                    <span class="help-block">
                                        <font color="red">{{ $errors->first('related_info') }}</font>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Entrar
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvide mi contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection