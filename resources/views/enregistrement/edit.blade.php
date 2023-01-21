@extends('layout.template')
@section('content')
 
<div class="card">
  <div class="card-header">Modifier Infos </div>
  <div class="card-body">
      
      <form action="{{ url('/update-participant'.$participant->id) }}" method="post">
        @method('PUT')    
        @csrf
        <input type="hidden" name="id" id="id" value="{{$participant->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="nom" id="nom" value="{{$participant->nom}}" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$participant->prenom}}" class="form-control"></br>
        <label>Téléphone</label></br>
        <input type="text" name="contact" id="contact" value="{{$participant->contact}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$participant->email}}" class="form-control"></br>
        <input type="submit" value="Modifier" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop