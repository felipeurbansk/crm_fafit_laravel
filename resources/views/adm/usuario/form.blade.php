@extends('layouts.master')

@section('content')
<div class="row-fluid">
    <div class="container offset5">
        <h4>Cadastrar novo administrador</h4>
    </div>
    <div class="span6 offset3">
        <!-- BEGIN INLINE NOTIFICATIONS widget-->
        <div class="widget">
            <div class="widget-body">
                <div class="row-fluid">
                    <div class="container offset4">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                            <div class="input-prepend">
                                                <span class="add-on"><i  class="icon-envelope"></i></span>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-lock"></i>
                                                </span><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar senha</label>

                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-lock"></i></span><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <br/>
                                        <div class="form-group row mb-0">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary">
                                                    Registrar
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container offset1">
                <div class="span5">
                    <h6 class="text-info" ><strong>*</strong> Você estará dando permissão de administrador do website para esse novo  usuário.</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
