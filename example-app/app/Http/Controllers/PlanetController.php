<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::table('planeet')->get();
        dd($planets);
    }

    public function show($planeet)
    {
        $planets = DB::table('planeet')->where('name', $planeet)->get();
        dd($planets);
    }
}
