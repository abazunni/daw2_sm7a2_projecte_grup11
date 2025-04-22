@extends('layouts.app')

@section('title', 'Editar Departament')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Editar Departament</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('departaments.update', $departament) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom del Departament</label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom', $departament->nom) }}" required>
                        @error('nom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="localitzacio" class="form-label">Localització</label>
                        <input type="text" class="form-control @error('localitzacio') is-invalid @enderror" id="localitzacio" name="localitzacio" value="{{ old('localitzacio', $departament->localitzacio) }}" required>
                        @error('localitzacio')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="director_departament" class="form-label">Director del Departament</label>
                        <input type="text" class="form-control @error('director_departament') is-invalid @enderror" id="director_departament" name="director_departament" value="{{ old('director_departament', $departament->director_departament) }}" required>
                        @error('director_departament')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('departaments.show', $departament) }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Tornar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Actualitzar Departament
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
