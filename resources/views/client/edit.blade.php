@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Client
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col col-md-7 col-lg-5 col-xl-4 col-xxl-3 mx-auto form p-4 mb-5">

                @includeif('partials.errors')

                <h2 class="card-title">{{ __('Editar') }} Cliente</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('clients.update', $client->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('client.form')

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
