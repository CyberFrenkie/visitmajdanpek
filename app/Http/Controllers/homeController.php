<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class homeController extends Controller
{
  


    public function index() {

        return view('news' , [
            'news' => News::latest()->paginate(3)
        ]);
    }
    public function show(News $id) {
        return view('new' , [
            'new' => News::find($id)
        ]);
    }
}
