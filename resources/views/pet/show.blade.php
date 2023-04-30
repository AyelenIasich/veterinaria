@extends('layouts.app')

@section('template_title')
    {{ $pet->name ?? "{{ __('Show') Pet" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $pet->client_id }}
                        </div>
                        <div class="form-group">
                            <strong>Chip:</strong>
                            {{ $pet->chip }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pet->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pet Category Id:</strong>
                            {{ $pet->pet_category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $pet->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pet->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
