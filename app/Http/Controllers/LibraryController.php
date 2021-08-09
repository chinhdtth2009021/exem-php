<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $query = Library::query();
        if ($search && strlen($search) > 0) {
            $query = $query->where('title', 'LIKE', '%' . $search . '%');
        }

        $list = $query->paginate(10)->appends(['search' => $search]);
        return view('/library/list', [
            'list' => $list
        ]);
    }
}
