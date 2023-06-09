@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>!Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{$error}}</span>
                                    @endforeach
                                    <button type= "button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">$times;</span>
                                    </button>    
                                </div>
                            @endif

                            {!! Form::open(array('route'=>'blogs.store', 'method'=>'POST')) !!}
                            <div class="row">


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Titulo</label>
                                        {!! Form::text('titulo',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Contenido</label>
                                        {!! Form::textArea('contenido',null,array('class'=>'form-control','style'=>'height: 160px')) !!}
                                    </div>
                                </div>
    
    

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
    
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
