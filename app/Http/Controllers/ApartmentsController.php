<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function index()
    {
        $list = Apartments::all();
        return view('/apartment/list', ['list' => $list]);
    }


    public function create()
    {

        return view('/apartment/form');
    }

    public function store(Request $request)
    {
        $apartment = new Apartments();
        $apartment->fill($request->all());
        $apartment->save();
        return redirect('/apartment/list');
    }


    public function show(Apartments $apartments)
    {
        //
    }
    public function  save( Request $request, $id){
        $save = Apartments::find($id);
        $save->update($request->all());
        $save->save();
        return redirect('/apartment/list');
    }


    public function edit(Apartments $apartments)
    {
        //
    }


    public function update(Request $request, Apartments $apartments, $id)
    {
        $update = Apartments::find($id);
        return view('/apartment/edit',['list' => $update]);

    }


    public function destroy(Apartments $apartments)
    {
        //
    }
    public function  delete($id){
        $delete = Apartments::find($id);
        $delete->datlete();
        return redirect('/apartment/list');
    }
}
