<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $participant = Participants::all();
      return view ('enregistrement.index')->with('participant', $participant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enregistrement.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'contact' => 'required|unique:participants|max:255',
            'email' => 'required|email|unique:participants|max:255',
        ]);

        $participant = new Participants;
 
        $participant->nom = $request->nom;
        $participant->prenom = $request->prenom;
        $participant->contact = $request->contact;
        $participant->email = $request->email;
 
        $participant->save();
        return redirect('index')->with('status', 'Participant Ajouté!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participants  $participants
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = Participants::find($id);
        return view('enregistrement.show')->with('participant', $participant);
    }

    public function edit($id)
    {
        $participant = Participants::find($id);
        return view('enregistrement.edit')->with('participant', $participant);
    }

    public function update(Request $request, $id)
    {
        $participant = Participants::find($id);
        $input = $request->all();
        $participant->update($input);
        return redirect('index')->with('status', 'infos du participant mises à jour!');  
    }
 
  
    public function destroy($id)
    {
        Participants::destroy($id);
        return redirect('index')->with('status', 'participant supprimé!');  
    }

    
}
