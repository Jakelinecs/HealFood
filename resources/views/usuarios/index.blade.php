@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-user')
                            <a class="btn btn-warning" href="{{ route('usuarios.create') }}"> Nuevo </a>
                        @endcan


                            <table id="data-table" class = "table table-striped mt-2">
                                <thead >
                                    <th> ID</th>
                                    <th> Nombre</th>
                                    <th> E-mail</th>
                                    <th> Rol</th>
                                    <th> Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->id }}</td>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            @if(!empty($usuario->getRoleNames()))
                                                @foreach($usuario->getRoleNames() as $rolName)
                                                    <h5><span>{{ $rolName }}</span></h5>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                        @can('editar-user')
                                            <a class = "btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}"> Editar </a>
                                        @endcan

                                        @can('borrar-user')
                                            {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('borrar', ['class'=>'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $usuarios->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

