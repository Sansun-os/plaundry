<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index (){
        $user = DB::table('datausers')->count();
        $paket = DB::table('datapakets')->count();
        $tranksaksi = DB::table('tranksaksibarus')->count();
        return view('dashboard',compact('user','paket','tranksaksi'));
    }
}
