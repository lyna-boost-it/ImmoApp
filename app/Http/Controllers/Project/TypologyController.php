<?php
namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Typology;
use Illuminate\Http\Request;
class TypologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $types=Typology::all();

        return view('Project.typology.index')->with('types',$types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = new Typology();

        return view('Project.typology.create',
        compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type=Typology:: create($request->only(
        'id',
        'nature',
        'type',
        'consistance',
        'description',
        'tva'));


        return redirect()->route ('Project.typology.index')->with('success',"vous avez ajouter une Typologie avec succès");

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
        $type=Typology::find($id);
        return view("Project.typology.edit", compact('type') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$type=Typology::find($id);
        $type->update($request->only(
            'nature',
            'type',
            'consistance',
            'description',
            'tva'));
            return redirect('/Project/typology')->with('success',"vous avez modifier une typology avec succès");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Typology::find($id);
        $type->delete();
        return redirect('/Project/typology')->with('success',"vous avez supprimer une typology avec succès");
    }
}
