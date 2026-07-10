@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-warning">
        <h3>Modifier une Parcelle</h3>
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

        <form action="{{ route('parcelles.update', $parcelle->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input
                    type="text"
                    name="nom"
                    class="form-control"
                    value="{{ $parcelle->nom }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Culture</label>
                <input
                    type="text"
                    name="culture"
                    class="form-control"
                    value="{{ $parcelle->culture }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Superficie</label>
                <input
                    type="number"
                    step="0.01"
                    name="superficie"
                    class="form-control"
                    value="{{ $parcelle->superficie }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Date de plantation</label>
                <input
                    type="date"
                    name="date_plantation"
                    class="form-control"
                    value="{{ $parcelle->date_plantation }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Statut</label>

                <select name="statut" class="form-select">

                    <option value="En cours"
                        {{ $parcelle->statut == 'En cours' ? 'selected' : '' }}>
                        En cours
                    </option>

                    <option value="Récoltée"
                        {{ $parcelle->statut == 'Récoltée' ? 'selected' : '' }}>
                        Récoltée
                    </option>

                </select>

            </div>

            <button type="submit" class="btn btn-warning">
                Modifier
            </button>

            <a href="{{ route('parcelles.index') }}" class="btn btn-secondary">
                Annuler
            </a>

        </form>

    </div>

</div>

@endsection