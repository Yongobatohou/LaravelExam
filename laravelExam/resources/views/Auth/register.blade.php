@extends('layouts.base')

@section('contenu')

<div class="container-md col-4 mt-5">
    <h1 class="fw-ligth text-center">INSCRIPTION</h1>
    <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputName">
        </div>
        @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputName">
        </div>
        @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 170px;">S'inscrire</button>
      </form>
</div>

@endsection
