@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} City
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-3 mx-auto  form p-4 mb-5">

                @includeif('partials.errors')



                <h2 class="card-title">{{ __('Registrar') }} Ciudad</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('cities.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('city.form')

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
