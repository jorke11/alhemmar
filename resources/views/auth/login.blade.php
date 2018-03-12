@extends('layouts.login')

@section('content')
<div >
    <div class="container" >
        <div style="width: 100%;height: 50px">
        </div>
        <div class="row">
            <div class="col-md-5 col-center">
                <div class="panel panel-default " style="border-color:#4a4a4a;border:0;background-color:#4a4a4a">
                    <div class="panel-body" style="background-color: #4a4a4a;border-radius: 10px;" >
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            <div class="row" style="padding-bottom: 4%">
                                <div class="col-lg-12">
                                    <p class="text-center">
                                        <img src="/img/logo_blanco.png" width="90%">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="titles" style="color:white">Correo</label>
                                                <input id="email" type="email" class="form-control input-sm" name="email" value="{{ old('email') }}" required autofocus placeholder="correo">
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="email" class="titles" style="color:white">Clave</label>
                                                <input id="password" type="password" class="form-control input-sm" name="password" required placeholder="Clave">
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> <span style="color:white">Recordarme</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-7 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Ingresar
                                            </button>


                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-lg-offset-3">
                                            <a class="btn btn-link" href="{{ url('/password/reset') }}" style="color:white">
                                                Olvidate tu clave?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top: 6%;padding-bottom: 5%">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-2 col-lg-offset-3">
                                            <a href="https://es-la.facebook.com/ALSECUR/" target="_blank" ><img src='img/facebook50x50.png'></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="https://www.instagram.com/alhemmarsecurity" target="_blank"><img src='img/instagram50x50.png'  class="img-responsive"></a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href='https://www.twitter.com/ALHEMMARSECUR' target="_blank"><img src='img/twitter50x50.png'  class="img-responsive" ></a>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
