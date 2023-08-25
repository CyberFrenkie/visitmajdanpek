<?php

namespace App\Http\Controllers;

use App\Models\Sight;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        
        return view('home');
        
       
    }


    public function index2() {
        return view('sights' , [
            'sights' => Sight::latest()->paginate(3)
        ]);
    }

}
