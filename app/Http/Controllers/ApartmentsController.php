<?php

namespace App\Http\Controllers;

use App\Http\Requests\Apartment;
use App\Models\Apartments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentsController extends Controller
{
    public function list(Apartment $request)
    {
        return view('.apartment.list',
            [
                'list' => $list
            ]);
    }


    public function create()
    {

        return view('.apartment.form');
    }

    public function index()
    {
        return view('.apartment.list', [
            'list' => DB::table('apartments')->paginate(6)
//            $users = DB::table('users')->simplePaginate(15);
        ]);
    }

    public function store(Request $request)
    {
        $apartment = new Apartments;
        $apartment->fill($request->all());
        $apartment->save();
        return redirect('/apartment/list');
    }


    public function show(Apartments $apartments)
    {
        //
    }

    public function save(Request $request, $id)
    {
        $save = Apartments::find($id);
        $save->update($request->all());
        $save->save();
        return redirect('/apartment/list');
    }


    public function edit(Apartments $apartments, $id)
    {
        $edit = Apartments::find($id);
        return view('.apartment.edit',[
            'edit' => $edit
        ]);
    }


    public function update(Request $request, Apartments $apartments, $id)
    {
        $update = Apartments::find($id);
        $update->update($request->all());
        $update->save();
        return redirect('/apartment/list');

    }


    public function destroy(Apartments $apartments)
    {
        //
    }

    public function delete($id)
    {
        $delete = Apartments::find($id);
        $delete->delete();
        return redirect('/apartment/list');
    }
}
