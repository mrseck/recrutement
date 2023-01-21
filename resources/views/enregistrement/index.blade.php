@extends('layout.template')

@section('title', 'SIMPLON - Liste des participants')

@section('content1')
<div class="container">
     <div class="bg-dark text-white p-5">
        <center>
        <H1>LISTE DES PARTICIPANTS</H1>
        <p>Ci-dessous les noms des personnes inscrites pour l'évènement</p>
       </center>
     </div>
</div>
@endsection
@section('content')
    <div class="container mt-3" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des participants</div>
                    <div class="card-body">
                        <a href="{{ url('/') }}" class="btn btn-success btn-sm" title="Add New Participant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter nouveau participant
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($participant as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                          <a href="{{ url('edit-participant/'.$item->id)}}" class="btn btn-success btnview">Modifier</a>
                                          <a href="{{ url('delete-participant/'.$item->id)}}" class="btn btn-danger  btnview">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection