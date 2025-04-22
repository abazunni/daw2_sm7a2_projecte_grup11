@extends('layouts.app')

@section('title', 'Consultor Dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h2 class="mb-0">Tauler de Consultor</h2>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4>Benvingut, {{ Auth::user()->name }}!</h4>
                    <p>Has iniciat sessió com a Consultor.</p>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-building fa-3x mb-3 text-success"></i>
                                <h5 class="card-title">Departaments</h5>
                                <p class="card-text">Visualitza informació de departaments</p>
                                <a href="{{ route('departaments.index') }}" class="btn btn-success">Veure Departaments</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-success"></i>
                                <h5 class="card-title">Professors</h5>
                                <p class="card-text">Visualitza informació de professors</p>
                                <a href="{{ route('professors.index') }}" class="btn btn-success">Veure Professors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
