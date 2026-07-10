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
             @include('parcelles._form')
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