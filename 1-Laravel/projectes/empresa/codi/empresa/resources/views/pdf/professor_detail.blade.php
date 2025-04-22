<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detall del Professor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h1, h2 {
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            width: 30%;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Detall del Professor</h1>
    
    <h2>Informació Personal</h2>
    <table>
        <tr>
            <th>ID</th>
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
    
    <h2>Informació de Contacte</h2>
    <table>
        <tr>
            <th>Mòbil</th>
            <td>{{ $professor->mobil }}</td>
        </tr>
        <tr>
            <th>Telèfon Fix</th>
            <td>{{ $professor->telefon }}</td>
        </tr>
    </table>
    
    <h2>Informació del Departament</h2>
    <table>
        <tr>
            <th>Departament</th>
            <td>
                @if($professor->departament instanceof \App\Models\Departament)
                    {{ $professor->departament->nom }}
                @else
                    @php
                        $departament = \App\Models\Departament::find($professor->departament);
                    @endphp
                    
                    @if($departament)
                        {{ $departament->nom }}
                    @else
                        No departament
                    @endif
                @endif
            </td>
        </tr>
        <tr>
            <th>Localització</th>
            <td>
                @if($professor->departament instanceof \App\Models\Departament)
                    {{ $professor->departament->localitzacio }}
                @else
                    @php
                        $departament = \App\Models\Departament::find($professor->departament);
                    @endphp
                    
                    @if($departament)
                        {{ $departament->localitzacio }}
                    @else
                        No disponible
                    @endif
                @endif
            </td>
        </tr>
        <tr>
            <th>Director</th>
            <td>
                @if($professor->departament instanceof \App\Models\Departament)
                    {{ $professor->departament->director_departament }}
                @else
                    @php
                        $departament = \App\Models\Departament::find($professor->departament);
                    @endphp
                    
                    @if($departament)
                        {{ $departament->director_departament }}
                    @else
                        No disponible
                    @endif
                @endif
            </td>
        </tr>
    </table>
    
    <div class="footer">
        <p>Document generat el {{ date('d/m/Y H:i:s') }}</p>
        <p>Escola de Cicles Formatius - Sistema de Gestió de Departaments</p>
    </div>
</body>
</html>
