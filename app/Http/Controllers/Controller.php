<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request){
        $name =  $request->get('search');
        $admin = new Library();
        $admin = DB::table('libraries')->where('name', $name)->first();
//        return $admin;
        return view('/library/list',[
            'admins' =>$admin
        ]);
    }

}
