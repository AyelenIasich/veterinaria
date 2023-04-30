<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="dni" class="form-label mb-2 pt-2">DNI</label>
            {{ Form::input('number', 'dni', $client->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => '12345678']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="nombre" class="form-label mb-2 pt-2">Nombre</label>
            {{ Form::text('nombre', $client->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Juan Carlos']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="apellido" class="form-label mb-2 pt-2">Apellido</label>
            {{ Form::text('apellido', $client->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Perez']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2">
            <label for="city_id" class="form-label mb-2 pt-2">Ciudad</label>
            {{ Form::select('city_id', $cities, $client->city_id, ['class' => 'form-select' . ($errors->has('city_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Ciudad']) }}
            {!! $errors->first('city_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group mb-2">
            <label for="direccion" class="form-label mb-2 pt-2">Dirección</label>
            {{ Form::text('direccion', $client->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 requerido">
            <label for="telefono" class="form-label mb-2 pt-2">Teléfono</label>
            {{ Form::text('telefono', $client->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-3">
            <label for="fecha_alta" class="form-label mb-2 pt-2">Fecha de Alta</label>
            {{ Form::date('fecha_alta', $client->fecha_alta, ['class' => 'form-control' . ($errors->has('fecha_alta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Alta']) }}
            {!! $errors->first('fecha_alta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group mb-2 ">
            <div class="form-check  mb-2 pt-2">
                <input class="form-check-input" type="checkbox" name="estado" id="estado" value="1"
                    {{ $client->estado || old('estado', 0) === 1 ? 'checked' : '' }}>
                <label class="form-check-label " for="estado">Cliente Activo</label>
            </div>
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
        <button type="submit" class="btn btn-guardar">{{ __('REGISTRAR CLIENTE') }}</button>
    </div>
</div>
