@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Pet
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-12 col-md-10 col-lg-10  col-xl-10 col-xxl-3 mx-auto form p-4 mb-5">

                @includeif('partials.errors')


                <h2 class="card-title">{{ __('Editar') }} Mascota</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('pets.update', $pet->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('pet.form')

                    </form>
                </div>



            </div>
        </div>
    </section>
@endsection
