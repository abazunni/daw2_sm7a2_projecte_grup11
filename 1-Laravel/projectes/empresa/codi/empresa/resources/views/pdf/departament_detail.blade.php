<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detall del Departament</title>
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
    <h1>Detall del Departament</h1>
    
    <h2>Informació del Departament</h2>
    <table>
        <tr>
            <th>ID</th>
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
        <tr>
            <th>Total de Professors</th>
            <td>{{ $departament->professors->count() }}</td>
        </tr>
    </table>
    
    <h2>Professors del Departament</h2>
    @if($departament->professors->isEmpty())
        <p>Aquest departament no té professors assignats.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Correu</th>
                    <th>Mòbil</th>
                    <th>Ciutat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departament->professors as $professor)
                    <tr>
                        <td>{{ $professor->identificador }}</td>
                        <td>{{ $professor->nom }}</td>
                        <td>{{ $professor->correu }}</td>
                        <td>{{ $professor->mobil }}</td>
                        <td>{{ $professor->ciutat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    <div class="footer">
        <p>Document generat el {{ date('d/m/Y H:i:s') }}</p>
        <p>Escola de Cicles Formatius - Sistema de Gestió de Departaments</p>
    </div>
</body>
</html>
