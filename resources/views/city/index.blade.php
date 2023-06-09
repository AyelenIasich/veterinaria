@extends('layouts.app')

@section('template_title')
    City
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ciudades') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('cities.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left"><i class="fa-solid fa-plus"></i>
                                    {{ __('Nuevo') }}
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
                                        <th>Codigo Postal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cities as $city)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $city->nombre }}</td>
                                            <td>{{ $city->codigo_postal }}</td>

                                            <td>
                                                <form action="{{ route('cities.destroy', $city->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('cities.edit', $city->id) }}"><i
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
                {!! $cities->links() !!}

            </ul>
        </nav>
    </div>
@endsection
