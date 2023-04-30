<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="dni" class="form-label mb-2 pt-2">Propietarios</label>
            {{ Form::select('client_id', $propietarios, $pet->client_id, ['class' => 'form-select' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar propietario']) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="dni" class="form-label mb-2 pt-2">Chip</label>
            {{ Form::text('chip', $pet->chip, ['class' => 'form-control' . ($errors->has('chip') ? ' is-invalid' : ''), 'placeholder' => 'Chip']) }}
            {!! $errors->first('chip', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="nombre" class="form-label mb-2 pt-2">Nombre</label>
            {{ Form::text('nombre', $pet->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 ">
            <label for="pet_category_id" class="form-label mb-2 pt-2">Tipo de mascota</label>
            {{ Form::select('pet_category_id', $categorias, $pet->pet_category_id, ['class' => 'form-select' . ($errors->has('pet_category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar tipo de mascotas']) }}
            {!! $errors->first('pet_category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 ">
            <label for="fecha_nacimiento" class="form-label mb-2 pt-2">Fecha de nacimiento</label>
            {{ Form::date('fecha_nacimiento', $pet->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <div class="form-check  mb-2 pt-2">
                <input class="form-check-input" type="checkbox" name="estado" id="estado" value="1"
                    {{ $pet->estado || old('estado', 0) === 1 ? 'checked' : '' }}>
                <label class="form-check-label " for="estado">Mascota Activa</label>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <p><span class="error">*</span> Campos requeridos</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button type="submit" class="btn btn-guardar">{{ __('Registrar Mascota') }}</button>
    </div>
</div>
