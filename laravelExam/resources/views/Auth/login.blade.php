@extends('layouts.base')

@section('contenu')

<div class="container-md col-3 mt-5">
    <h1 class="fw-ligth text-center">CONNEXION</h1>
    <form method="POST" action="{{route('login')}}" enctype="multipart/form-data">
        @csrf
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
        <button type="submit" class="btn btn-primary" style="margin-left: 100px;">Se connecter</button>

        <p></p>
        <p>Pas encore un compte?? <a href="{{route('get.register')}}">Créé en un!</a></p>
      </form>
</div>

@endsection
