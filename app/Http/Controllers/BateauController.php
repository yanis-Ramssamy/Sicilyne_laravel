<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Equipement, Bateau};
use App\Http\Requests\BateauRequest;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class BateauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Bateau $bateau)
    {
      $bateaus =Bateau::all();
     
        $bateaus= Bateau::paginate(3);
        return view('affichage_ferry', compact('bateaus'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements = Equipement::all();
        return view('create_bateau', compact('equipements'));
    }
    
    public function creerPDF()
    {
        $bateaux = Bateau::with('equipements')->get();

        $pdf = Pdf::loadView('pdf.bateau', compact('bateaux'));

        return $pdf->download('liste_bateaux.pdf');
    }

   

    
    /**
     * Store a newly created resource in storage.
     */
    

    public function store(BateauRequest $bateaurequest) : RedirectResponse
        {      $bateau = new Bateau();
            $bateau->nombateau = $bateaurequest->nombateau;
    
            // Gérer l'upload de la photo
            if ($bateaurequest->hasFile('photo')) {
                $photoName = time().'_'.$bateaurequest->file('photo')->getClientOriginalName();
                $bateaurequest->file('photo')->move(public_path('images'), $photoName);
                $bateau->photo = 'images/' . $photoName;
            }
    
            $bateau->longueur = $bateaurequest->input('longueur');
            $bateau->largeur = $bateaurequest->input('largeur');
            $bateau->vitesse = $bateaurequest->input('vitesse');
    
            $bateau->save(); // Enregistre le bateau avant d'ajouter les équipements
    
            // Attachement des équipements (après l'enregistrement)
            if ($bateaurequest->has('equipements')) {
                $bateau->equipements()->attach($bateaurequest->equipements);
            }
    
            return redirect()->route('affichage_ferry')->with('success', 'Ferry créé avec succès.');
            
 }
        
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bateau = Bateau::with('equipements')->findOrFail($id);
        return view('affichage_produit', compact('bateau'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
       
    $bateau = Bateau::findOrFail($id);
    // Supprimer le bateau
    $bateau->delete();

    return redirect()->route('affichage_ferry')->with('success', 'Ferry supprimé avec succès.');

    }

}