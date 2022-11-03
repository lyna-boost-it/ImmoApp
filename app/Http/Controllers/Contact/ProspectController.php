<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Contact;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('Contact.prospect.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact();

        return view('Contact.prospect.create',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact=Contact:: create($request->only(
           'id', 'name','first_name'
            ,'civility','provenance_dg'
            ,'m','miss_name','employer','salary_net'
            ,'social_security_number','date_of_birth'
            ,'place_of_birth','father_name'
            ,'mother_name','function'
            ,'address','commune','phone_fax','email'
            ,'web_site','rib2','commercial_initial'
            ,'commercial','affectation_date'
            ,'pi_type','piece_number','delivery'
            ,'from','birth_certificat_number' ));


            return redirect()->route ('Contact.prospect.index')->with('success',"vous avez ajouter un prospect avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=Contact::find($id);
        return view('Contact.prospect.show',compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        return view("Contact.prospect.edit", compact('contact') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact=Contact::find($id);
        $contact->update($request->only(
            'id', 'name','first_name'
            ,'civility','provenance_dg'
            ,'m','miss_name','employer','salary_net'
            ,'social_security_number','date_of_birth'
            ,'place_of_birth','father_name'
            ,'mother_name','function'
            ,'address','commune','phone_fax','email'
            ,'web_site','rib2','commercial_initial'
            ,'commercial','affectation_date'
            ,'pi_type','piece_number','delivery'
            ,'from','birth_certificat_number' ));


            return redirect()->route ('Contact.prospect.index')->with('success',"vous avez modifier un prospect avec succès");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect()->route ('Contact.prospect.index')->with('success',"vous avez supprimer un prospect avec succès");

    }
}
