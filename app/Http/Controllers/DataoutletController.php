<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataoutletController extends Controller
{
    public function index(){
        return view('kelola_outlet.kelola_outlet');
    }
}
