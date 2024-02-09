@extends('layouts.base')

@section('contenu')

<div class="container-md col-6 mt-5">
    <div class="container d-flex" style="flex-direction: row; justify-content:space-between;">
        <p style="float: left; font-weight:bold;">{{$user->nom}} {{$user->prenom}}</p>
        <a class="btn btn-success mb-5" style="float: right" href="{{route('get.add.contact')}}">Ajouter un contact</a>
    </div>
    <table class="table table-hover table-bordered mt-5">
        <thead>
          <tr>
            <th scope="col">N°</th>
            <th scope="col">Photo</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Opérations</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($contacts as $contact)

          <tr>
            <th scope="row">{{$contact->id}}</th>
            <td><img class="img-thumbnail" src="{{$contact->getAvatarUrl()}}" alt=""></td>
            <td>{{$contact->nom}}</td>
            <td>{{$contact->prenom}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->telephone}}</td>
            <td>
                <a class="btn btn-warning mb-2" href="{{route('get.edit.contact', ['id' => $contact->id])}}">Modifier</a>
                <a class="btn btn-danger" href="{{route('delete.contact', ['id' => $contact->id])}}">Supprimer</a>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
</div>

@endsection
