<!-- filepath: c:\laragon\www\Sicilyne\resources\views\affichage_produit.blade.php -->
@extends('template')

@section('navbar')
<nav class="navbar navbar-expand-lg" style="background-color: #5987B9;">
  <div class="container">
      <a class="navbar-brand" href="{{ route('accueil') }}">Sicilyne</a>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-light ms-3">Déconnexion</button>
                </form>
            </li>
              <li class="nav-item">
                  <a href="{{ route('create_bateau') }}" class="btn btn-light ms-3">Créer un Ferry</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

@section('contenu')
<h1>{{ $bateau->nombateau }}</h1>
<div class="container mt-5">
    <a href="{{ route('affichage_ferry') }}" class="btn btn-dark">← Retour</a>
    
    <div class="card mt-3">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('images/'  .$bateau->photo) }}" class="img-fluid rounded-start" alt="{{ $bateau->nombateau }}">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">{{ $bateau->nombateau }}</h3>
                    <p><strong>Largeur:</strong> {{ $bateau->largeur ?? 'N/A' }} m</p>
                    <p><strong>Longueur:</strong> {{ $bateau->longueur ?? 'N/A' }} m</p>
                    <p><strong>Vitesse:</strong> {{ $bateau->vitesse ?? 'N/A' }} km/h</p>
                    @if($bateau->equipements->isNotEmpty())
                        <p><strong>Équipements:</strong></p>
                        <ul>
                            @foreach($bateau->equipements as $equipement)
                                <li>{{ $equipement->libelle }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Aucun équipement disponible pour ce bateau.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection