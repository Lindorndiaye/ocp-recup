<?php

namespace App\Http\Controllers;

use App\Formateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use PDF;  

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formateurs = Formateur::orderBy('id')->get();
        return view('formateurs.index', ['formateurs' => $formateurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $formateurs = request('formateurs');
        return view('formateurs.create',['formateurs' => $formateurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'mimes:doc,pdf,docx,zip,png,jpeg,odt,jpg,svc,csv,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts',
            'carte.*' => 'mimes:doc,pdf,docx,zip,png,jpeg,odt,jpg,svc,csvmpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts'


        ]);


    if($request->hasfile('file'))

     {

        foreach($request->file('file') as $file)

        {

            $name=$file->getClientOriginalName();

            $file->move(public_path().'/images/', $name);  
        }
     }


        $image = $request->file('carte');
        if($image){
        $imageName=$image->getClientOriginalName();
        $image->move(public_path().'/images/', $imageName);
        }
        $formateurs = new Formateur();
        $formateurs->prenom = $request->prenom;
        $formateurs->nom = $request->nom;
        $formateurs->age = $request->age;
        $formateurs->email = $request->email;
        $formateurs->specialite = $request->specialite;
        $formateurs->mobile = $request->mobile;
        $formateurs->region = $request->region;
        $formateurs->ville = $request->ville;
        $formateurs->diplome = $request->diplome;
        $formateurs->diplomem = $request->diplomem;
        $formateurs->file = $name;
        $formateurs->carte = $imageName;
        $formateurs->save();
        Session::flash('message', ' added successfully');
        return redirect('/formateurs');

    }

    public function formateur($id)
    {
        //
        $formateur = Formateur::find($id);
        
        $formateurs = Formateur::orderBy('id')->get();
        return view('formateurs.show', compact('formateurs','formateur'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $formateur = Formateur::find($id);
        
        $formateurs = Formateur::orderBy('id')->get();
        return view('formateurs.show', compact('formateurs','formateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $formateur = Formateur::find($id);
        return view('formateurs/edit', ['formateur' => $formateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formateur $formateur)
    {
        //
        $formateur = Formateur::find($id);
        $data = $request->all();
        $Formateur->update($data);

	    Session::flash('message', $formateur['prenom'] . ' updated successfully');
        return view('formateurs/edit', ['formateur' => $formateur]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formateur $formateur)
    {
        //
        $formateur = Formateur::find($id);
	    $formateur->destroy($id);

	    Session::flash('message', $formateur['prenom'] . ' deleted successfully');
	    return redirect('/formateurs');
    }
}
