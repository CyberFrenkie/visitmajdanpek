<?php

namespace App\Http\Controllers;

use App\Models\Sight;
use Illuminate\Http\Request;

class sightsController extends Controller
{
    public function index() {
        return view('sights' , [
            'sights' => Sight::latest()->paginate(9)
        ]);
    }

    public function show(Sight $id) {
        return view('sight' , [
            'sight' => Sight::find($id)
        ]);
    }
}
