<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="mascota_id" class="form-label mb-2 pt-2">Mascota</label>
            {{ Form::select('mascota_id', $mascota, $medicalRecord->mascota_id, ['class' => 'form-select' . ($errors->has('mascota_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar mascota']) }}
            {!! $errors->first('mascota_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="fecha_consulta" class="form-label mb-2 pt-2">Fecha de consulta</label>
            {{ Form::date('fecha_consulta', $medicalRecord->fecha_consulta, ['class' => 'form-control' . ($errors->has('fecha_consulta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Consulta']) }}
            {!! $errors->first('fecha_consulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="observaciones" class="form-label mb-2 pt-2">Observaciones</label>
            <br>
            {!! Form::textarea('observaciones', null, [
                'id' => 'observaciones',
                // 'rows' => 5,
                // 'cols' => 67,
                'style' => 'resize:none ',
            ]) !!}
            {{-- {{ Form::text('observaciones', $medicalRecord->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }} --}}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col ">
        <p><span class="error">*</span> Campos requeridos</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button type="submit" class="btn btn-guardar">{{ __('REGISTRAR HISTORIA CLINICA') }}</button>
    </div>
</div>
