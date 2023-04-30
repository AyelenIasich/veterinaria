@extends('layouts.app')

@section('template_title')
    Medical Record
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h2 id="card_title">
                                {{ __('Listado de historias clínicas') }}
                            </h2>

                            <div class="float-right">
                                <a href="{{ route('medical-records.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left"><i class="fa-solid fa-plus"></i>
                                    {{ __('Nueva historia') }}
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

                                        <th>Mascota</th>
                                        <th>Fecha Consulta</th>
                                        <th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicalRecords as $medicalRecord)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $medicalRecord->mascota_id }}</td>
                                            <td>{{ $medicalRecord->fecha_consulta }}</td>
                                            <td>{{ $medicalRecord->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('medical-records.destroy', $medicalRecord->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('medical-records.show', $medicalRecord->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('medical-records.edit', $medicalRecord->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation " class="mt-3">
                    <ul class="pagination d-flex justify-content-end">
                        {!! $medicalRecords->links() !!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
