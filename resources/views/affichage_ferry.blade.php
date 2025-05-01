@extends('template')
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
                <li>
                    <a href="{{ route('creerPDF') }}" class="btn btn-primary">Générer le PDF</a>  
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('contenu')



<div class="container custom-width mt-4">
    @foreach($bateaus as $bateau)
    <div class="row align-items-center mb-3">
        <!-- Image -->
        <div class="col-md-4">
            <img src="{{ asset('images/' .$bateau->photo) }}" class="img-fluid" alt="{{ $bateau->nombateau }}">
        </div>
        <!-- Informations et Boutons -->
        <div class="col-md-8">
            <h2>{{ $bateau->nombateau }}</h2>
            <div class="d-flex justify-content-end align-items-center">
                <a href="{{ route('bateaux.show', $bateau->id) }}" class="btn btn-primary btn-sm me-2">Voir</a>
                <form action="{{ route('bateaux.destroy', $bateau->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm me-2">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
</div>

</div> 
    
      
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{ $bateaus->links('pagination::bootstrap-4') }}
        </ul>
    </nav>
    
@endsection