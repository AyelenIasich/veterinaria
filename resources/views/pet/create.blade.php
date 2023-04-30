@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pet
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10  col-xl-10 col-xxl-3 mx-auto form p-4 mb-5">

                @includeif('partials.errors')
                <h2 class="card-title">{{ __('Registro de Mascota') }}</h2>
                <form method="POST" action="{{ route('pets.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    @include('pet.form')
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
