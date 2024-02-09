@extends('layouts.base')

@section('contenu')

<div class="container-md col-6 mt-5">
    <form method="POST" action="{{route('add.contact')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" id="exampleInputPassword1">
        </div>
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputPassword1">
        </div>
        @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Téléphone</label>
            <input type="text" class="form-control" name="telephone" id="exampleInputPassword">
        </div>
        @error('telephone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Photo</label>
          <input type="file" class="form-control" name="photo" id="exampleInputEmail1">
        </div>
        @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
</div>

@endsection
