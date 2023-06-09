@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @can('crear-blog')
                            <a class="btn btn-warning" href="{{ route('blogs.create')}}"> Nuevo </a>
                        @endcan


                            <table id="data-table" class = "table table-striped mt-2">
                                <thead >
                                    <th> ID</th>
                                    <th> titulo</th>
                                    <th> Contenido</th>
                                    <th> Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->titulo }}</td>
                                        <td>{{ $blog->contenido }}</td>
                                        <td>
                                        @can('editar-blog')
                                            <a class = "btn btn-info" href="{{ route('blogs.edit',$blog->id) }}"> Editar </a>
                                        @endcan

                                        @can('borrar-blog')
                                            {!! Form::open(['method'=> 'DELETE', 'route'=> ['blogs.destroy', $blog->id], 'style'=>'display:inline']) !!}
                                                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $blogs->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

