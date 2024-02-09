<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }

    //affichage de la liste des contacts enregistrés par l'utilisateur courant
    public function index(){
        $user = auth()->user();
        $contacts = $user->contacts;
        return view('Contacts.index-contacts', [
            'contacts' => $contacts,
            'user' => $user
        ]);
    }

    //revoie de la vue d'ajout de contact
    public function get_add_contact(){
        return view('Contacts.add-contact');
    }

    //methode de création de contact
    public function add_contact(ContactRequest $contactRequest){
        Contact::create([
            'user_id' => auth()->id(),
            'nom' => $contactRequest->nom,
            'prenom' => $contactRequest->prenom,
            'email' => $contactRequest->email,
            'telephone' => $contactRequest->telephone,
            'photo' => $contactRequest->file('photo')->store('photos')
        ]);

        return redirect('/');
    }

    //revoie de la vue de mise à jour de contact
    public function get_edit_contact($id){
        $contact = Contact::find($id);
        return view('Contacts.edit-contact', [
            'contact' => $contact
        ]);
    }

    //methode de mise à jour de contact
    public function edit_contact(ContactRequest $contactRequest, $id){
        $contact = Contact::find($id);
        $contact->update([
            'nom' => $contactRequest->nom,
            'prenom' => $contactRequest->prenom,
            'email' => $contactRequest->email,
            'telephone' => $contactRequest->telephone,
        ]);

        if($contactRequest->hasFile('photo')){
            $contact->photo = $contactRequest->file('photo')->store('photos');
            $contact->save();
        }
        return redirect('/');
    }

    //methode de suppression de contact
    public function delete_contact($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }

}
