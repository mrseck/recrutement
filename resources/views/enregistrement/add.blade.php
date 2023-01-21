@extends('layout.template')

@section('title', 'SIMPLON - Enregistrement des participants')

@section('content1')
<div class="container">
  <div class="bg-dark text-white p-5">
     <center>
     <H1>ENREGISTREMENT DES PARTICIPANTS</H1>
     <p>Veuillez renseigner le formulaire ci dessous </p>
    </center>
  </div>
</div>
@endsection      


@section('content')
<div class="mt-3 col-md-8" style="text-align:center; display:inline-block;">
  <div class="container mt-4">
    @if(session('status'))
     <div class="alert alert-success">
       {{ session('status') }}
     </div>
   @endif
   </div>
  <div class="card">
   <div class="card-header">Enregister participant</div>
    <div class="card-body">
      
      <form name="participants" id="participants" action="{{ url('insert-participant') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
        <label for="nom">Nom</label></br>
        <input type="text" name="nom" id="nom" class="@error('nom') is-invalid @enderror form-control"></br>
        @error('nom')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="prenom">Prenom</label></br>
        <input type="text" name="prenom" id="prenom" class="@error('prenom') is-invalid @enderror form-control"></br>
        @error('prenom')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="contact">Téléphone</label></br>
        <input type="text" name="contact" id="contact" class="@error('contact') is-invalid @enderror form-control"></br>
        @error('contact')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="email">Email</label></br>
        <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror form-control"></br>
        @error('email')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>

        <input type="submit" value="Enregistrer" class="btn btn-dark"></br>
    </form>
  </div>
 </div>
</div>
@endsection