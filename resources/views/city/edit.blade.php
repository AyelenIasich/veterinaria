@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} City
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-3 mx-auto  form p-4 mb-5">

                @includeif('partials.errors')
                <h2 class="card-title">{{ __('Editar') }} Ciudad</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('cities.update', $city->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('city.form')
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
