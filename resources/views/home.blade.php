@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Servicion Nutricional Personalizado</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">



                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-color-01 order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cant_user =User::count();
                                            @endphp
                                            {{count(App\Models\User::all())}}
                                            <h2 class="text-right"><i class="fas fa-users f-left"></i><span>{{ $cant_user }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" > Ver mas </a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-color-03 order-card">
                                        <div class="card-block">
                                            <h5>Blog</h5>
                                            @php
                                                use App\Models\Blog;
                                                $cant_blog = Blog::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fas fa-users f-left"></i><span>{{ $cant_blog }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/blogs" > Ver mas </a></p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

