<div class="row">
    <div class="col">
        <div class="form-group mt-2  mb-2 requerido">
            <label for="nombre" class="form-label mb-2 pt-2">Nombre</label>
            {{ Form::text('nombre', $city->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="nombre" class="form-label mb-2 pt-2">Código Postal</label>
            {{ Form::input('number', 'codigo_postal', $city->codigo_postal, ['class' => 'form-control' . ($errors->has('codigo_postal') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Postal']) }}
            {!! $errors->first('codigo_postal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col ">
        <p><span class="error">*</span> Campos requeridos</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-guardar">{{ __('Guardar') }}</button>
    </div>
</div>
