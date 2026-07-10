<?php

namespace App\Http\Controllers;

use App\Models\Parcelle;
use Illuminate\Http\Request;

class ParcelleController extends Controller
{
    public function index()
    {
        $parcelles = Parcelle::all();

        return view('parcelles.index', compact('parcelles'));
    }
    public function show(Parcelle $parcelle){
    return view('parcelles.show', compact('parcelle'));
    }

    public function create(){
    return view('parcelles.create');
    }

    public function store(Request $request){
    Parcelle::create([
        'nom' => $request->nom,
        'culture' => $request->culture,
        'superficie' => $request->superficie,
        'date_plantation' => $request->date_plantation,
        'statut' => $request->statut,
    ]);

    return redirect()->route('parcelles.index');
}
}