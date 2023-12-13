<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{

    public function index()
    {
        $currDate = date('Y-m-d');
        $trains = Train::where('giorno', $currDate)->orderBy('orario_di_partenza', 'asc')->get();

        return view('index', compact('trains'));
    }
}
