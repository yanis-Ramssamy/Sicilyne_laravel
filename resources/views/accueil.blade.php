<!-- filepath: c:\laragon\www\Sicilyne\resources\views\accueil.blade.php -->
@extends('template')

@section('navbar')
<nav class="navbar navbar-expand-lg" style="background-color: #5987B9;">
  <div class="container">
      <a class="navbar-brand" href="#">Sicilyne</a>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto d-flex align-items-center">
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('login') }}">Connexion</a>
              </li>
              
          </ul>
      </div>
  </div>
</nav>

@section('carousel')
<div id="carouselExampleInterval" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/pizza.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/stade_sicile.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/vue-de-cefalu-sicile-etna3340.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('footer')
<footer style="background-color: #B3B3B3; padding: 20px; margin-top: 40px; border-top: 1px solid #e9ecef; text-align: center;">
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

        <!-- Partie Informations & Contacts -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h4>Informations & Contacts</h4>
            <ul style="list-style: none; padding: 0;">
                <li>Email: sicilyne@example.com</li>
                <li>Téléphone: +33 1 23 45 67 89</li>
                <li>Adresse: 123 Rue de Kebak King, Cachan</li>
            </ul>
        </div>

        <!-- Partie Copyright & Légal -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h4>Copyright & Légal</h4>
            <ul style="list-style: none; padding: 0;">
                <li>&copy; Sicilyne.com</li>
                <li><a href="/mentions-legales" style="color: #007bff; text-decoration: none;">Mentions légales</a></li>
                <li><a href="/politique-de-confidentialite" style="color: #007bff; text-decoration: none;">Politique de confidentialité</a></li>
            </ul>
        </div>

        <!-- Partie Liens Utiles -->
        <div style="flex: 1; min-width: 200px; margin: 10px;">
            <h4>Liens Utiles</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="/aide" style="color: #007bff; text-decoration: none;">Aide</a></li>
                <li><a href="/faq" style="color: #007bff; text-decoration: none;">FAQ</a></li>
                <li><a href="/blog" style="color: #007bff; text-decoration: none;">Blog</a></li>
            </ul>
        </div>

    </div>
    <style>
   
    
    
    </style>
</footer>



 
@endsection

