<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Parcelle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Ajouter une Parcelle</h2>
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
            Retour
        </a>

    </form>

</div>

</body>
</html>