@extends('layouts.app')

@section('title', 'Professors')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Professors</h2>
        <div>
            <a href="{{ route('pdf.professors') }}" class="btn btn-light me-2" target="_blank">
                <i class="fas fa-file-pdf"></i> Exportar PDF
            </a>
            @if(Auth::user()->role === 'administrador')
            <a href="{{ route('professors.create') }}" class="btn btn-light">
                <i class="fas fa-plus"></i> Nou Professor
            </a>
            @endif
        </div>
    </div>
    <div class="card-body">
        @if($professors->isEmpty())
            <div class="alert alert-info">
                No hi ha professors registrats.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Correu</th>
                            <th>Ciutat</th>
                            <th>Mòbil</th>
                            <th>Departament</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($professors as $professor)
                            <tr>
                                <td>{{ $professor->identificador }}</td>
                                <td>{{ $professor->nom }}</td>
                                <td>{{ $professor->correu }}</td>
                                <td>{{ $professor->ciutat }}</td>
                                <td>{{ $professor->mobil }}</td>
                                <td>
                                    @if($professor->departament instanceof \App\Models\Departament)
                                        <a href="{{ route('departaments.show', $professor->departament) }}">
                                            {{ $professor->departament->nom }}
                                        </a>
                                    @else
                                        @php
                                            $departament = \App\Models\Departament::find($professor->departament);
                                        @endphp
                                        
                                        @if($departament)
                                            <a href="{{ route('departaments.show', $departament) }}">
                                                {{ $departament->nom }}
                                            </a>
                                        @else
                                            <span class="text-muted">No departament</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('professors.show', $professor) }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i> Veure
                                        </a>
                                        
                                        @if(Auth::user()->role === 'administrador')
                                            <a href="{{ route('professors.edit', $professor) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                            
                                            <form action="{{ route('professors.destroy', $professor) }}" method="POST" class="d-inline" onsubmit="return confirm('Estàs segur que vols eliminar aquest professor?');">
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
