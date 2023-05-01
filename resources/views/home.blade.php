@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="home-cards">
            <div class="row mx-auto home align-items-center">
                <div class="col">
                    <div class=" links-card card m-5 align-self-center" style="width: 18rem;">
                        <a class="nav-link" href="{{ route('clients.index') }}">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body pt-5 pb-5 text-center">
                                <p class="display-1">
                                    <i class="fa-solid fa-user  pb-3"></i>
                                </p>

                                <h3 class="card-text">Clientes</h3>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="col">
                    <div class=" links-card  card m-5" style="width: 18rem;">
                        <div class="card-body pt-5 pb-5 text-center">
                            <a class="nav-link" href="{{ route('pets.index') }}">
                                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                                <p class="display-1">
                                    <i class="fa-solid fa-paw pb-3"></i>
                                </p>
                                <h3 class="card-text">Mascotas</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">

                    <div class="links-card card m-5" style="width: 18rem;">
                        <a class="nav-link" href="{{ route('medical-records.index') }}">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body pt-5 pb-5 text-center">
                                <p class="display-1">
                                    <i class="fa-solid fa-file-medical pb-3"></i>
                                </p>
                                <h3 class="card-text">Historias Clínicas</h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
