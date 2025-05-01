<!-- filepath: c:\laragon\www\Sicilyne\resources\views\pdf\bateaux.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Bateaux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Liste des Bateaux</h1>
    <table>
        <thead>
            <tr>
                <th>Nom du Bateau</th>
                <th>Longueur (m)</th>
                <th>Largeur (m)</th>
                <th>Vitesse (km/h)</th>
                <th>Équipements</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bateaux as $bateau)
                <tr>
                    <td>{{ $bateau->nombateau }}</td>
                    <td>{{ $bateau->longueur }}</td>
                    <td>{{ $bateau->largeur }}</td>
                    <td>{{ $bateau->vitesse }}</td>
                    <td>
                        @if($bateau->equipements->isNotEmpty())
                            <ul>
                                @foreach($bateau->equipements as $equipement)
                                    <li>{{ $equipement->libelle }}</li>
                                @endforeach
                            </ul>
                        @else
                            Aucun équipement
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>