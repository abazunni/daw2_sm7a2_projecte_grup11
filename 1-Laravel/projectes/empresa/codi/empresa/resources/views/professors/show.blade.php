@extends('layouts.app')

@section('title', 'Detalls del Professor')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
            <!-- Add this to the card-header div -->
<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Detalls del Professor</h2>
    <div>
        <a href="{{ route('pdf.professor.detail', $professor) }}" class="btn btn-light me-2" target="_blank">
            <i class="fas fa-file-pdf"></i> Exportar PDF
        </a>
        @if(Auth::user()->role === 'administrador')
        <a href="{{ route('professors.edit', $professor) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Editar
        </a>
        @endif
    </div>
</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Informació Personal</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%">ID</th>
                                <td>{{ $professor->identificador }}</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>{{ $professor->nom }}</td>
                            </tr>
                            <tr>
                                <th>Correu</th>
                                <td>{{ $professor->correu }}</td>
                            </tr>
                            <tr>
                                <th>Adreça</th>
                                <td>{{ $professor->adreca }}</td>
                            </tr>
                            <tr>
                                <th>Ciutat</th>
                                <td>{{ $professor->ciutat }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3>Informació de Contacte i Departament</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%">Mòbil</th>
                                <td>{{ $professor->mobil }}</td>
                            </tr>
                            <tr>
                                <th>Telèfon Fix</th>
                                <td>{{ $professor->telefon }}</td>
                            </tr>
                            <tr>
                                <th>Departament</th>
                                <td>
                                    <a href="{{ route('departaments.show', $professor->departament) }}">
                                        {{ $professor->departament->nom }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Localització</th>
                                <td>{{ $professor->departament->localitzacio }}</td>
                            </tr>
                            <tr>
                                <th>Director</th>
                                <td>{{ $professor->departament->director_departament }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="mt-4">
                    <a href="{{ route('professors.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Tornar a la Llista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
