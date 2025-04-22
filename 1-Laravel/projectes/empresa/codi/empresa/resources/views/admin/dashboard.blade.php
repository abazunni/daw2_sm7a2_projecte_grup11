@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Tauler d'Administrador</h2>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4>Benvingut, {{ Auth::user()->name }}!</h4>
                    <p>Has iniciat sessió com a Administrador.</p>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Gestió d'Usuaris</h5>
                                <p class="card-text">Gestiona els usuaris de l'aplicació</p>
                                <a href="{{ route('users.index') }}" class="btn btn-primary">Gestionar Usuaris</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-building fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Departaments</h5>
                                <p class="card-text">Gestiona els departaments</p>
                                <a href="{{ route('departaments.index') }}" class="btn btn-primary">Gestionar Departaments</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-primary"></i>
                                <h5 class="card-title">Professors</h5>
                                <p class="card-text">Gestiona els professors</p>
                                <a href="{{ route('professors.index') }}" class="btn btn-primary">Gestionar Professors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
