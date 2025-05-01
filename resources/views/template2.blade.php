<!-- filepath: c:\laragon\www\Sicilyne\resources\views\create_bateau.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Ferry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container { max-width: 900px; margin: auto; }
        .card { border-radius: 15px; }
        .image-container { text-align: center; }
        .image-container img { width: 100%; border-radius: 10px; }
    </style>
</head>
<body>
    @yield('navbar')
    <h1>@yield('contenu')</h1>
@yield('carousel')

    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
            
      body {
          background-color: #D9D9D9;
      }
      .card, .footer {
    background-color: #B3B3B3;
}


    </style>
  </body>
</html>
