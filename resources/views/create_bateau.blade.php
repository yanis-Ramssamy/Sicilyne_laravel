
@extends('template2')

@section('navbar')
<nav class="navbar navbar-expand-lg" style="background-color: #5987B9;">
  <div class="container">
      <a class="navbar-brand" href="{{ route('accueil') }}">Sicilyne</a>
      <div class="d-flex justify-content-between align-items-center mt-4"> <h1>Bienvenue sur la page d'affichage des ferries</h1> </div>
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
<div class="container mt-5">
    <a href="{{ route('affichage_ferry') }}" class="btn btn-dark mb-3">← Retour</a>
    
    <div class="card p-3 shadow">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un Ferry</h3>
                <form action="{{ route('bateaux.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombateau" class="form-label">Nom du Bateau</label>
                        <input type="text" class="form-control" id="nombateau" name="nombateau" required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                    <div class="mb-3">
                        <label for="longueur" class="form-label">Longueur (m)</label>
                        <input type="number" class="form-control" id="longueur" name="longueur" required>
                    </div>
                    <div class="mb-3">
                        <label for="largeur" class="form-label">Largeur (m)</label>
                        <input type="number" class="form-control" id="largeur" name="largeur" required>
                    </div>
                    <div class="mb-3">
                        <label for="vitesse" class="form-label">Vitesse (km/h)</label>
                        <input type="number" class="form-control" id="vitesse" name="vitesse" required>
                    </div>
                    <div class="mb-3">
                        <label for="equipements" class="form-label">Équipements</label>
                        <select multiple class="form-control" id="equipements" name="equipements[]">
                            @foreach($equipements as $equipement)
                                <option value="{{ $equipement->id }}">{{ $equipement->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection