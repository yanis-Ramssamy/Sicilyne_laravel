<!-- filepath: c:\laragon\www\Sicilyne\resources\views\affichage_produit.blade.php -->


<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-expand-lg" style="background-color: #5987B9;">
  <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('accueil')); ?>">Sicilyne</a>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li class="nav-item">
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-light ms-3">Déconnexion</button>
                </form>
            </li>
              <li class="nav-item">
                  <a href="<?php echo e(route('create_bateau')); ?>" class="btn btn-light ms-3">Créer un Ferry</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

<?php $__env->startSection('contenu'); ?>
<h1><?php echo e($bateau->nombateau); ?></h1>
<div class="container mt-5">
    <a href="<?php echo e(route('affichage_ferry')); ?>" class="btn btn-dark">← Retour</a>
    
    <div class="card mt-3">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="<?php echo e(asset('images/'  .$bateau->photo)); ?>" class="img-fluid rounded-start" alt="<?php echo e($bateau->nombateau); ?>">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title"><?php echo e($bateau->nombateau); ?></h3>
                    <p><strong>Largeur:</strong> <?php echo e($bateau->largeur ?? 'N/A'); ?> m</p>
                    <p><strong>Longueur:</strong> <?php echo e($bateau->longueur ?? 'N/A'); ?> m</p>
                    <p><strong>Vitesse:</strong> <?php echo e($bateau->vitesse ?? 'N/A'); ?> km/h</p>
                    <?php if($bateau->equipements->isNotEmpty()): ?>
                        <p><strong>Équipements:</strong></p>
                        <ul>
                            <?php $__currentLoopData = $bateau->equipements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($equipement->libelle); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <p>Aucun équipement disponible pour ce bateau.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Sicilyne\resources\views/affichage_produit.blade.php ENDPATH**/ ?>