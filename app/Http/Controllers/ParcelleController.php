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
}