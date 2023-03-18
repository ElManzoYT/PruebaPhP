<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreIndicador') }}
            {{ Form::text('nombreIndicador', $indicadore->nombreIndicador, ['class' => 'form-control' . ($errors->has('nombreIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Nombreindicador']) }}
            {!! $errors->first('nombreIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigoIndicador') }}
            {{ Form::text('codigoIndicador', $indicadore->codigoIndicador, ['class' => 'form-control' . ($errors->has('codigoIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Codigoindicador']) }}
            {!! $errors->first('codigoIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidadMedidaIndicador') }}
            {{ Form::text('unidadMedidaIndicador', $indicadore->unidadMedidaIndicador, ['class' => 'form-control' . ($errors->has('unidadMedidaIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Unidadmedidaindicador']) }}
            {!! $errors->first('unidadMedidaIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valorIndicador') }}
            {{ Form::text('valorIndicador', $indicadore->valorIndicador, ['class' => 'form-control' . ($errors->has('valorIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Valorindicador']) }}
            {!! $errors->first('valorIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaIndicador') }}
            {{ Form::text('fechaIndicador', $indicadore->fechaIndicador, ['class' => 'form-control' . ($errors->has('fechaIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Fechaindicador']) }}
            {!! $errors->first('fechaIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempoIndicador') }}
            {{ Form::text('tiempoIndicador', $indicadore->tiempoIndicador, ['class' => 'form-control' . ($errors->has('tiempoIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Tiempoindicador']) }}
            {!! $errors->first('tiempoIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('origenIndicador') }}
            {{ Form::text('origenIndicador', $indicadore->origenIndicador, ['class' => 'form-control' . ($errors->has('origenIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Origenindicador']) }}
            {!! $errors->first('origenIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>