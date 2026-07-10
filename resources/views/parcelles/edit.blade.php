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

           @include('parcelles._form')
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