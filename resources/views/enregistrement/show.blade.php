@extends('layout.template')
@section('content')
 
 
<div class="card">
  <div class="card-header">Infos Participant</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $participant->nom }}</h5>
        <p class="card-text">Address : {{ $participant->prenom }}</p>
        <p class="card-text">Phone : {{ $participant->contact }}</p>
        <p class="card-text">Phone : {{ $participant->email }}</p>
  </div>
       
    </hr>
  
  </div>
</div>