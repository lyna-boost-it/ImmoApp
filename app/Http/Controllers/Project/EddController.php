<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Bloc;
use App\Models\Edd;
use App\Models\Project;
use App\Models\Typology;
use Illuminate\Http\Request;

class EddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $edds = Edd::all();

        return view('Project.edd.index')->with('edds', $edds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edd = new Edd();
        $projects = Project::all();
        $types = Typology::all();
         $blocs = Bloc::all();
        return view(
            'Project.edd.create',
            compact('edd', 'projects', 'types','blocs')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $edd = Edd::create($request->only(
            'id',
            'project_id',
            'bloc_id',
            'type_id',
            'floor',
            'orientation',
            'consistance',
            'n_lot_syst',
            'n_lot_edd',
            'living_area',
            'garden_area',
            'terrace_area',
            'global_area',
            'avc',
            'path',
            'progress_date','plan_existence'
        ));


        return redirect()->route('Project.edd.index')->with('success', "vous avez ajouter une Edd avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edd =  Edd::find($id);

        return view('ParkManager.dts.view', compact('edd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edd =  Edd::find($id);
        return view("Project.edd.edit", compact('edd'));
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

        $edd =  Edd::find($id);
        $edd->update($request->only(
            'id',
            'project_id ',
            'bloc_id ',
            'type_id ',
            'floor',
            'orientation',
            'consistance',
            'n_lot_syst',
            'n_lot_edd',
            'living_area',
            'garden_area',
            'terrace_area',
            'global_area',
            'avc',
            'path',
            'progress_date','plan_existence'
        ));
        return redirect('/Project/edd')->with('success', "vous avez modifier une edd avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edd =  Edd::find($id);
        $edd->delete();
        return redirect('/Project/edd')->with('success', "vous avez supprimer une edd avec succès");
    }
}
