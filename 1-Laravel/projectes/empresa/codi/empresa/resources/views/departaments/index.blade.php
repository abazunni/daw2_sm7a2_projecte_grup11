@extends('layouts.app')

@section('title', 'Departaments')

@section('content')
<div class="card shadow">
    <!-- Add this right after the card-header div -->
<div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Departaments</h2>
    <div>
        <a href="{{ route('pdf.departaments') }}" class="btn btn-light me-2" target="_blank">
            <i class="fas fa-file-pdf"></i> Exportar PDF
        </a>
        @if(Auth::user()->role === 'administrador')
        <a href="{{ route('departaments.create') }}" class="btn btn-light">
            <i class="fas fa-plus"></i> Nou Departament
        </a>
        @endif
    </div>
</div>
    <div class="card-body">
        @if($departaments->isEmpty())
            <div class="alert alert-info">
                No hi ha departaments registrats.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Localització</th>
                            <th>Director</th>
                            <th>Professors</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departaments as $departament)
                            <tr>
                                <td>{{ $departament->identificador }}</td>
                                <td>{{ $departament->nom }}</td>
                                <td>{{ $departament->localitzacio }}</td>
                                <td>{{ $departament->director_departament }}</td>
                                <td>{{ $departament->professors->count() }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('departaments.show', $departament) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Veure
                                        </a>
                                        
                                        @if(Auth::user()->role === 'administrador')
                                            <a href="{{ route('departaments.edit', $departament) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            
                                            <form action="{{ route('departaments.destroy', $departament) }}" method="POST" class="d-inline" onsubmit="return confirm('Estàs segur que vols eliminar aquest departament?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Eliminar
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>
@endsection
