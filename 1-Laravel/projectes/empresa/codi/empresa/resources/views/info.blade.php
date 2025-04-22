<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informació - Escola de Cicles Formatius</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h1 class="text-center mb-0">Informació de l'Aplicació</h1>
                    </div>
                    <div class="card-body p-4">
                        <h2>Sobre Aquesta Aplicació</h2>
                        <p>
                            Aquesta aplicació està dissenyada per gestionar la base de dades d'una escola de cicles formatius. Permet gestionar departaments i professors, així com l'administració d'usuaris.
                        </p>
                        
                        <h2>Com Utilitzar-la</h2>
                        <h3>Iniciar Sessió</h3>
                        <p>
                            Per accedir a l'aplicació, has d'iniciar sessió amb les teves credencials. Si no tens un compte, contacta amb un administrador.
                        </p>
                        <ol>
                            <li>Fes clic al botó "Login" a la pàgina d'inici</li>
                            <li>Introdueix el teu correu electrònic i contrasenya</li>
                            <li>Fes clic a "Login" per accedir al teu tauler</li>
                        </ol>
                        
                        <h3>Tancar Sessió</h3>
                        <p>
                            Per tancar la sessió de l'aplicació:
                        </p>
                        <ol>
                            <li>Fes clic al teu nom d'usuari a la cantonada superior dreta de qualsevol pàgina</li>
                            <li>Selecciona "Logout" del menú desplegable</li>
                        </ol>
                        
                        <div class="text-center mt-4">
                            <a href="{{ route('home') }}" class="btn btn-primary">
                                Tornar a l'Inici
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
