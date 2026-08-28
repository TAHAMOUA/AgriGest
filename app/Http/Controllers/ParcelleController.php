<?php

namespace App\Http\Controllers;

use App\Models\Parcelle;
use Illuminate\Http\Request;

class ParcelleController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('q');
        $statut = $request->query('statut');

        $parcelles = Parcelle::query()
            ->when($q, fn ($query, $q) => $query->where(fn ($q2) =>
                $q2->where('nom', 'like', "%{$q}%")
                   ->orWhere('culture', 'like', "%{$q}%")
            ))
            ->when($statut, fn ($query, $statut) => $query->where('statut', $statut))
            ->get();

        return view('parcelles.index', compact('parcelles', 'q', 'statut'));
    } 
   
    public function show(Parcelle $parcelle){
    return view('parcelles.show', compact('parcelle'));
    }

    public function create(){
    return view('parcelles.create');
    }

   public function store(Request $request){
    $request->validate([
        'nom' => 'required',
        'culture' => 'required',
        'superficie' => 'required|numeric',
        'date_plantation' => 'required|date',
        'statut' => 'required',
    ]);

    Parcelle::create([
        'nom' => $request->nom,
        'culture' => $request->culture,
        'superficie' => $request->superficie,
        'date_plantation' => $request->date_plantation,
        'statut' => $request->statut,
    ]);

    return redirect()->route('parcelles.index');
    }
    public function edit(Parcelle $parcelle){
    return view('parcelles.edit', compact('parcelle'));
    }

   public function update(Request $request, Parcelle $parcelle)
{
    $request->validate([
        'nom' => 'required',
        'culture' => 'required',
        'superficie' => 'required|numeric',
        'date_plantation' => 'required|date',
        'statut' => 'required',
    ]);

    $parcelle->update([
        'nom' => $request->nom,
        'culture' => $request->culture,
        'superficie' => $request->superficie,
        'date_plantation' => $request->date_plantation,
        'statut' => $request->statut,
    ]);

    return redirect()->route('parcelles.index');
}

    public function destroy(Parcelle $parcelle){
    $parcelle->delete();

    return redirect()->route('parcelles.index');
    }
}