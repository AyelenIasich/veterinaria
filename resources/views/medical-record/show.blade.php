@extends('layouts.app')

@section('template_title')
    {{ $medicalRecord->name ?? "{{ __('Show') Medical Record" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medical Record</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medical-records.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mascota Id:</strong>
                            {{ $medicalRecord->mascota_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Consulta:</strong>
                            {{ $medicalRecord->fecha_consulta }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $medicalRecord->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
