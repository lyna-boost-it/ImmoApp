<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Project;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Bloc;
use App\Models\Project;

class BlocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocs=Bloc::all();
        $projects=Project::all();
        return view('Project.bloc.index',compact('blocs','projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $bloc = new Bloc();
       $projects=Project::all();
       return view('Project.bloc.create',compact('bloc','projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bloc=Bloc:: create($request->only(
            'project_id',
            'bloc',
            'floor_number',
            'lot_number',
            'progress_rate',
            'progress_date',));


            return redirect()->route ('Project.bloc.index')->with('success',"vous avez ajouter un Bloc avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bloc = Bloc::find($id);
        $projects=Project::all();
        return view('Project.bloc.show',compact('bloc','projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $bloc=Bloc::find($id);
       return view("Project.bloc.edit", compact('bloc') );
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
        $bloc=Bloc::find($id);
        $bloc->update($request->only(
            'bloc',
            'floor_number',
            'lot_number',
            'progress_rate',
            'progress_date'));

        return redirect('/Project/bloc')->with('success',"vous avez modifier un bloc avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloc=Bloc::find($id);
        $bloc->delete();
        return redirect('/Project/bloc')->with('success',"vous avez supprimer un bloc avec succès");
    }


     public function bloc($id)
    {
        $blocs = Bloc::where('project_id', $id)->get();
        $projects=Project::all();
        $project_id=$id;
        return view('Project.project.bloc',compact('blocs','projects','project_id'));
    }

    public function newbloc($id)
    {
       $bloc = new Bloc();
       $project = Project::find($id);
       return view('Project.project.newbloc',compact('bloc','project'));
    }
}


