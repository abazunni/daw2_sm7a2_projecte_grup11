@extends('layouts.app')

@section('title', 'Detalls del Departament')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
<!-- Add this to the card-header div -->
<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Detalls del Departament</h2>
    <div>
        <a href="{{ route('pdf.departament.detail', $departament) }}" class="btn btn-light me-2" target="_blank">
            <i class="fas fa-file-pdf"></i> Exportar PDF
        </a>
        @if(Auth::user()->role === 'administrador')
        <a href="{{ route('departaments.edit', $departament) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Editar
        </a>
        @endif
    </div>
</div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h3>Informació del Departament</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 30%">ID</th>
                                <td>{{ $departament->identificador }}</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>{{ $departament->nom }}</td>
                            </tr>
                            <tr>
                                <th>Localització</th>
                                <td>{{ $departament->localitzacio }}</td>
                            </tr>
                            <tr>
                                <th>Director</th>
                                <td>{{ $departament->director_departament }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h3>Estadístiques</h3>
                        <div class="card bg-light">
                            <div class="card-body text-center">
                                <h4>Total de Professors</h4>
                                <p class="display-4">{{ $departament->professors->count() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3>Professors del Departament</h3>
                @if($departament->professors->isEmpty())
                    <div class="alert alert-info">
                        Aquest departament no té professors assignats.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Correu</th>
                                    <th>Mòbil</th>
                                    <th>Accions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departament->professors as $professor)
                                    <tr>
                                        <td>{{ $professor->identificador }}</td>
                                        <td>{{ $professor->nom }}</td>
                                        <td>{{ $professor->correu }}</td>
                                        <td>{{ $professor->mobil }}</td>
                                        <td>
                                            <a href="{{ route('professors.show', $professor) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i> Veure
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                
                <div class="mt-4">
                    <a href="{{ route('departaments.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Tornar a la Llista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
