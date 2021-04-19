@extends('layouts.index')

@section('content')
    <h1>Salut les ingrédients</h1>
    <a href="{{route('create.ingredient')}}">Créer des ingrédients</a>
    <br>
    <h2>Liste des ingrédients :</h2>
    <div>
        @foreach ($allIngredients as $ingred)
            <div class="card d-flex justify-content-center align-items-center m-3" style="width: 300px">
                <h3 class="m-1">{{$ingred->nom}} </h3>
                {{-- <img src="{{$ingred->image}}" alt="" width="200"> --}}
                <form action="{{route('destroy.ingredient', $ingred->id)}}" method="POST" class="m-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                <a href="{{route('show.details', $ingred->id)}}"><button class="btn btn-primary m-1">Plus de détails</button></a>
            </div>
        @endforeach
    </div>
@endsection