@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-success text-white">
        <h3>Ajouter une Parcelle</h3>
    </div>

    <div class="card-body">

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('parcelles.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Culture</label>
                <input type="text" name="culture" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Superficie</label>
                <input type="number" step="0.01" name="superficie" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Date de plantation</label>
                <input type="date" name="date_plantation" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Statut</label>

                <select name="statut" class="form-select">
                    <option value="En cours">En cours</option>
                    <option value="Récoltée">Récoltée</option>
                </select>

            </div>

            <button type="submit" class="btn btn-success">
                Enregistrer
            </button>

            <a href="{{ route('parcelles.index') }}" class="btn btn-secondary">
                Annuler
            </a>

        </form>

    </div>

</div>

@endsection