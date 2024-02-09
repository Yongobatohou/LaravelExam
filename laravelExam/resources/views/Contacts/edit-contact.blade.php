@extends('layouts.base')

@section('contenu')

<div class="container-md col-6 mt-5">
    <form method="POST" action="{{route('edit.contact', ['id' => $contact->id])}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="exampleInputPassword1" value="{{$contact->nom}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" value="{{$contact->prenom}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="telephone" id="exampleInputPassword" value="{{$contact->telephone}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{$contact->email}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Photo</label>
          <input type="file" class="form-control" name="photo" id="exampleInputEmail1">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
</div>

@endsection
