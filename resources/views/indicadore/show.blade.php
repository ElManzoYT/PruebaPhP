@extends('layouts.app')

@section('template_title')
    {{ $indicadore->name ?? "{{ __('Show') Indicadores" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Indicador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('indicadore.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $indicadore->nombreIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $indicadore->codigoIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad de Medida:</strong>
                            {{ $indicadore->unidadMedidaIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $indicadore->valorIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $indicadore->fechaIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {{ $indicadore->tiempoIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $indicadore->origenIndicador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
