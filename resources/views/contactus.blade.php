@extends('layouts.page')

@section('content')

<div class="container-fluid" style="padding-top: 5% ">
    @if(Session::has('success'))
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <div class="alert alert-success"><strong>Email enviado con exito!</strong></div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">

            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['id'=>'frm']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Nombres</label>
                                <input type="text" class="form-control input-orders input-sm" id="name" name='name' required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Apellidos</label>
                                <input type="text" class="form-control input-orders input-sm" id="last_name" name='last_name' required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control input-orders input-sm" id="email" name='email' required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Celular</label>
                                <input type="text" class="form-control input-orders input-sm" id="phone" name='phone' required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email">Asunto</label>
                                <input type="text" class="form-control input-orders input-sm" id="subject" name='subject' required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email">Mensaje</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-success form-control">Enviar</button>
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
