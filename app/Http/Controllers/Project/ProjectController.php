<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();

        return view('Project.project.index')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();

        return view('Project.project.create',
        compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project=Project:: create($request->only(
            'code',
            'type',
            'name',
            'description',
            'address',
            'start_date',
            'end_date',
            'duration',
            'bloc_number',
            'lot_number',
            'charges',
            'additional_charges',
            'vice_preparations',
            'guaranty',
            'delivery_date',));

            return redirect()->route ('Project.project.index')->with('success',"vous avez ajouter une Typologie avec succès");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project=Project::find($id);

       return view("Project.project.edit", compact('project') );
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
        $project=Project::find($id);
        $project->update($request->only(
               'code',
            'type',
            'name',
            'description',
            'address',
            'start_date',
            'end_date',
            'duration',
            'bloc_number',
            'lot_number',
            'charges',
            'additional_charges',
            'vice_preparations',
            'guaranty',
            'delivery_date'));
            return redirect('/Project/project')->with('success',"vous avez modifier une typology avec succès");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        $project->delete();
        return redirect('/Project/project')->with('success',"vous avez supprimer une typology avec succès");

    }
}
