@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Client
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col col-md-7 col-lg-5 col-xl-4 mx-auto form p-4 mb-5">
                @includeif('partials.errors')
                <h2 class="mb-4">{{ __('Registro de Cliente') }}</h2>
                <form method="POST" action="{{ route('clients.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    @include('client.form')
                </form>
            </div>
        </div>
    </section>
@endsection
