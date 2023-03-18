@extends('layouts.app')

@section('template_title')
    Indicadore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Indicadores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('indicadore.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Codigo</th>
										<th>Unidadmedida</th>
										<th>Valor</th>
										<th>Fecha</th>
										<th>Tiempo</th>
										<th>Origen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($indicadores as $indicadore)
                                        <tr>
                                            <td>{{ $indicadore->id }}</td>
                                            
											<td>{{ $indicadore->nombreIndicador }}</td>
											<td>{{ $indicadore->codigoIndicador }}</td>
											<td>{{ $indicadore->unidadMedidaIndicador }}</td>
											<td>{{ $indicadore->valorIndicador }}</td>
											<td>{{ $indicadore->fechaIndicador }}</td>
											<td>{{ $indicadore->tiempoIndicador }}</td>
											<td>{{ $indicadore->origenIndicador }}</td>

                                            <td>
                                                <form action="{{ route('indicadore.destroy',$indicadore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('indicadore.show',$indicadore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('indicadore.edit',$indicadore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                            
                        </div>
                        {!! $indicadores->links() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
