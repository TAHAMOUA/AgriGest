@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">
        <h3>Détails de la Parcelle</h3>
    </div>

    <div class="card-body">

        <p><strong>Nom :</strong> {{ $parcelle->nom }}</p>

        <p><strong>Culture :</strong> {{ $parcelle->culture }}</p>

        <p><strong>Superficie :</strong> {{ $parcelle->superficie }} ha</p>

        <p><strong>Date de plantation :</strong> {{ $parcelle->date_plantation }}</p>

        <p><strong>Statut :</strong> {{ $parcelle->statut }}</p>

    </div>

    <div class="card-footer">

        <a href="{{ route('parcelles.index') }}" class="btn btn-secondary">
            Retour
        </a>

        <a href="{{ route('parcelles.edit', $parcelle->id) }}" class="btn btn-warning">
            Modifier
        </a>

    </div>

</div>

@endsection