<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('titre'); ?></title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class=" background-color: #B3B3B3;">
    <?php echo $__env->yieldContent('navbar'); ?>
    <h1><?php echo $__env->yieldContent('contenu'); ?></h1>
<?php echo $__env->yieldContent('carousel'); ?>

    <?php echo $__env->yieldContent('footer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
            
      body {
          background-color: #D9D9D9;
      }
      .card, .footer {
    background-color: #B3B3B3;
}

.custom-carousel {
    max-width: 800px;
    margin: 0 auto;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.custom-carousel img {
    border-radius: 10px;
}
    </style>
  </body>
</html>
<?php /**PATH C:\laragon\www\Sicilyne\resources\views/template.blade.php ENDPATH**/ ?>