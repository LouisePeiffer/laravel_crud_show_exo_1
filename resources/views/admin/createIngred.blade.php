@extends('layouts.index')

@section('content')
    <h2>Créer un ingrédient</h2>
    <a href="{{route('home')}}">Retour</a>
    <form action="{{route('store.ingredient')}}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" placeholder="Nom de l'ingrédient">
        <br>
        <label for="nom">Quantité</label>
        <input type="text" name="quantite" placeholder="Quantité de l'ingrédient">
        <br>
        <label for="nom">Image</label>
        <input type="text" name="image" placeholder="Chemin de l'image">
        <br>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
@endsection