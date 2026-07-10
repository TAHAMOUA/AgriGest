<div class="mb-3">
    <label class="form-label">Nom</label>
    <input
        type="text"
        name="nom"
        class="form-control"
        value="{{ old('nom', $parcelle->nom ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Culture</label>
    <input
        type="text"
        name="culture"
        class="form-control"
        value="{{ old('culture', $parcelle->culture ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Superficie</label>
    <input
        type="number"
        step="0.01"
        name="superficie"
        class="form-control"
        value="{{ old('superficie', $parcelle->superficie ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Date de plantation</label>
    <input
        type="date"
        name="date_plantation"
        class="form-control"
        value="{{ old('date_plantation', $parcelle->date_plantation ?? '') }}">
</div>

<div class="mb-3">

    <label class="form-label">Statut</label>

    <select name="statut" class="form-select">

        <option
            value="En cours"
            {{ old('statut', $parcelle->statut ?? '') == 'En cours' ? 'selected' : '' }}>
            En cours
        </option>

        <option
            value="Récoltée"
            {{ old('statut', $parcelle->statut ?? '') == 'Récoltée' ? 'selected' : '' }}>
            Récoltée
        </option>

    </select>

</div>
