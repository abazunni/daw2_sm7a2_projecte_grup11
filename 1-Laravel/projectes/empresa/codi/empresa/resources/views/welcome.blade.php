<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola de Cicles Formatius</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero-section {
            padding: 100px 0;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-4 fw-bold mb-4">Escola de Cicles Formatius</h1>
                    <p class="lead mb-5">Sistema de Gestió de Departaments i Professors</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3">
                            Iniciar Sessió
                        </a>
                        <a href="{{ route('info') }}" class="btn btn-outline-secondary btn-lg px-4">
                            Més Informació
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-building fa-3x mb-3 text-primary"></i>
                        <h3 class="card-title">Gestió de Departaments</h3>
                        <p class="card-text">Gestiona els departaments de l'escola amb facilitat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-primary"></i>
                        <h3 class="card-title">Gestió de Professors</h3>
                        <p class="card-text">Manté un registre actualitzat de tots els professors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                        <h3 class="card-title">Gestió d'Usuaris</h3>
                        <p class="card-text">Administra els usuaris i els seus permisos d'accés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>
