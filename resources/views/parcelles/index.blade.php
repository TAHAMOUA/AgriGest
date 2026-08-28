@extends('layouts.app')

@section('content')

<h2 class="mb-4">Liste des Parcelles</h2>

<a href="{{ route('parcelles.create') }}" class="btn btn-success mb-3">
    Ajouter une parcelle
</a>

<form method="GET" action="{{ route('parcelles.index') }}" class="row g-3 mb-3">
    <div class="col-md-5">
        <input
            type="text"
            name="q"
            class="form-control"
            placeholder="Rechercher par nom ou culture..."
            value="{{ request('q') }}">
    </div>

    <div class="col-md-3">
        <select name="statut" class="form-select">
            <option value="">Tous</option>
            <option value="en culture" {{ request('statut') == 'en culture' ? 'selected' : '' }}>en culture</option>
            <option value="récoltée" {{ request('statut') == 'récoltée' ? 'selected' : '' }}>récoltée</option>
            <option value="en jachère" {{ request('statut') == 'en jachère' ? 'selected' : '' }}>en jachère</option>
        </select>
    </div>

    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Rechercher</button>
        <a href="{{ route('parcelles.index') }}" class="btn btn-secondary">Réinitialiser</a>
    </div>
</form>

@if ($parcelles->isEmpty())
    <div class="alert alert-info">
        Aucune parcelle trouvée.
    </div>
@endif

<table class="table table-bordered table-striped">

    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Culture</th>
            <th>Superficie</th>
            <th>Date plantation</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($parcelles as $parcelle)

        <tr>

            <td>{{ $parcelle->nom }}</td>
            <td>{{ $parcelle->culture }}</td>
            <td>{{ $parcelle->superficie }} ha</td>
            <td>{{ $parcelle->date_plantation }}</td>
            <td>{{ $parcelle->statut }}</td>

            <td>

                <a href="{{ route('parcelles.show', $parcelle->id) }}"
                    class="btn btn-primary btn-sm">
                    Voir
                </a>

                <a href="{{ route('parcelles.edit', $parcelle->id) }}"
                    class="btn btn-warning btn-sm">
                    Modifier
                </a>

                <form action="{{ route('parcelles.destroy', $parcelle->id) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Voulez-vous vraiment supprimer cette parcelle ?')">
                        Supprimer
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection