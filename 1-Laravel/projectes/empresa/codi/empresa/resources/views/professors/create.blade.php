@extends('layouts.app')

@section('title', 'Crear Professor')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Crear Nou Professor</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('professors.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom del Professor</label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                        @error('nom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="correu" class="form-label">Correu Electrònic</label>
                        <input type="email" class="form-control @error('correu') is-invalid @enderror" id="correu" name="correu" value="{{ old('correu') }}" required>
                        @error('correu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="adreca" class="form-label">Adreça</label>
                        <input type="text" class="form-control @error('adreca') is-invalid @enderror" id="adreca" name="adreca" value="{{ old('adreca') }}" required>
                        @error('adreca')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="ciutat" class="form-label">Ciutat</label>
                        <input type="text" class="form-control @error('ciutat') is-invalid @enderror" id="ciutat" name="ciutat" value="{{ old('ciutat') }}" required>
                        @error('ciutat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="mobil" class="form-label">Telèfon Mòbil</label>
                            <input type="text" class="form-control @error('mobil') is-invalid @enderror" id="mobil" name="mobil" value="{{ old('mobil') }}" required>
                            @error('mobil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="telefon" class="form-label">Telèfon Fix</label>
                            <input type="text" class="form-control @error('telefon') is-invalid @enderror" id="telefon" name="telefon" value="{{ old('telefon') }}" required>
                            @error('telefon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="departament" class="form-label">Departament</label>
                        <select class="form-select @error('departament') is-invalid @enderror" id="departament" name="departament" required>
                            <option value="">Selecciona un departament</option>
                            @foreach($departaments as $departament)
                                <option value="{{ $departament->identificador }}" {{ old('departament') == $departament->identificador ? 'selected' : '' }}>
                                    {{ $departament->nom }}
                                </option>
                            @endforeach
                        </select>
                        @error('departament')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('professors.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Tornar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Guardar Professor
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
