<?php

namespace App\Http\Controllers\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $treni = Train::where('departure_day', '>=', Train::raw('curdate()'))->get();
        return view('home', compact('treni'));
    }
}
