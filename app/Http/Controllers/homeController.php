<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function news() {
        return view('components.news' , [
            'news' => News::latest()->paginate(9)
        ]);
    }

    public function show(News $id) {
        return view('components.new' , [
            'new' => News::find($id)
        ]);
    }
}
