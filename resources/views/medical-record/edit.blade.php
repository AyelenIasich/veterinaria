@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Medical Record
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col col-md-7 col-lg-5 col-xl-4 col-xxl-3 mx-auto form p-4 mb-5">

                @includeif('partials.errors')

                <h3 class="card-title">{{ __('Editar') }} Historia Clínica</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('medical-records.update', $medicalRecord->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('medical-record.form')

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
