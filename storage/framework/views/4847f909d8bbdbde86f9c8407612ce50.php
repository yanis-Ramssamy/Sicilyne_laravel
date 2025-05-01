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
            <?php $__currentLoopData = $bateaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bateau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($bateau->nombateau); ?></td>
                    <td><?php echo e($bateau->longueur); ?></td>
                    <td><?php echo e($bateau->largeur); ?></td>
                    <td><?php echo e($bateau->vitesse); ?></td>
                    <td>
                        <?php if($bateau->equipements->isNotEmpty()): ?>
                            <ul>
                                <?php $__currentLoopData = $bateau->equipements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($equipement->libelle); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            Aucun équipement
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\Sicilyne\resources\views/pdf/bateau.blade.php ENDPATH**/ ?>