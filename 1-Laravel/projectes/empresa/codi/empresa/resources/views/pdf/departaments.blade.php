<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Llistat de Departaments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
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
    <h1>Llistat de Departaments</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Localització</th>
                <th>Director</th>
                <th>Professors</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="footer">
        <p>Document generat el {{ date('d/m/Y H:i:s') }}</p>
        <p>Escola de Cicles Formatius - Sistema de Gestió de Departaments</p>
    </div>
</body>
</html>
