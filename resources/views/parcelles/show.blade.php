<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Parcelle</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Détails de la Parcelle</h2>

    <div class="card">
        <div class="card-body">

            <p><strong>Nom :</strong> {{ $parcelle->nom }}</p>

            <p><strong>Culture :</strong> {{ $parcelle->culture }}</p>

            <p><strong>Superficie :</strong> {{ $parcelle->superficie }} ha</p>

            <p><strong>Date de plantation :</strong> {{ $parcelle->date_plantation }}</p>

            <p><strong>Statut :</strong> {{ $parcelle->statut }}</p>

        </div>
    </div>

    <a href="{{ route('parcelles.index') }}" class="btn btn-secondary mt-3">
        Retour à la liste
    </a>

</div>

</body>
</html>