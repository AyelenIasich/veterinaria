@extends('layouts.app')

@section('template_title')
    Client
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Clientes') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left"><i class="fa-solid fa-plus"></i>
                                    {{ __('Nuevo Cliente') }}
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
                                        <th>DNI</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Teléfono</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $client->dni }}</td>
                                            <td>{{ $client->nombre }}</td>
                                            <td>{{ $client->apellido }}</td>
                                            <td>{{ $client->telefono }}</td>
                                            <td>
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('clients.show', $client->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a> --}}
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('clients.edit', $client->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <nav aria-label="Page navigation " class="mt-3">
            <ul class="pagination d-flex justify-content-end">
                {!! $clients->links() !!}

            </ul>
        </nav>
    </div>
@endsection
