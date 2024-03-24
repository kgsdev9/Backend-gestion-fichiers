<select id="dynamicSelect">
    <option value="">Sélectionner...</option>
    @foreach($options as $option)
        <option value="{{ $option->id }}" data-nom="{{ $option->nom }}" data-prenom="{{ $option->prenom }}" data-email="{{ $option->email }}">{{ $option->nom }}</option>
    @endforeach
</select>

<div id="infoElement">
    <p>Nom: <span id="nom"></span></p>
    <p>Prénom: <span id="prenom"></span></p>
    <p>Email: <span id="email"></span></p>
</div>
