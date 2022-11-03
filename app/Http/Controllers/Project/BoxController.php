<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Project;

use App\Models\Box;
use App\Models\Edd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxs=Box::all();
        return view('Project.box.index',compact('boxs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $box = new Box();
       $edds=EDD::all();
       return view('Project.box.create',compact('box','edds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $box=Box:: create($request->only(
            'edd_id',
            'type',
            'description',
            'lot_number',
            'price_m2',
            'area',
            'amount',));


            return redirect()->route ('Project.box.index')->with('success',"vous avez ajouter un Bloc avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $box = Box::find($id);
        return view('Project.box.show',compact('box'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $box=Box::find($id);
       return view("Project.box.edit", compact('box') );
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
        $box=Box::find($id);
        $box->update($request->only(
            'description',
            'price_m2',
            'area',
            'amount'));

        return redirect('/Project/box')->with('success',"vous avez modifier un box avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $box=Box::find($id);
        $box->delete();
        return redirect('/Project/box')->with('success',"vous avez supprimer un box avec succès");
    }
}
