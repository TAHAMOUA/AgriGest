<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriGest</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

        <div class="container">

            <a class="navbar-brand fw-bold" href="{{ route('parcelles.index') }}">
                🌱 AgriGest
            </a>

            <div>

                <a href="{{ route('parcelles.index') }}" class="btn btn-outline-light me-2">
                    Liste
                </a>

                <a href="{{ route('parcelles.create') }}" class="btn btn-light">
                    Ajouter
                </a>

            </div>

        </div>

    </nav>

    <div class="container mt-4">

        @yield('content')

    </div>

</body>

</html>