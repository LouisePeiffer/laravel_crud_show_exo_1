@extends('layouts.index')

@section('content')
    <h1>SHOW INGREDIENTS</h1>
    <a href="{{route('home')}}">Retour</a>
    <div class="card d-flex align-items-center" style="width: 300px">
        <h3 class="p-3">{{$details->nom}}</h3>
        <h3>{{$details->quantite}}</h3>
        {{-- <h3>{{$details->image}}</h3> --}}
        <img src="{{$details->image}}" alt="" width="200" class="p-3">
        <form action="{{route('destroy.ingredient', $details->id)}}" method="POST" class="m-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
    </div>
@endsection