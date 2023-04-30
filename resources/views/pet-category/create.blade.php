@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pet Category
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-3 mx-auto  form p-4 mb-5">

                @includeif('partials.errors')

                <h3 class="card-title mb-3">{{ __('Crear') }} tipo de mascota</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('pet-categories.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        @include('pet-category.form')

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
