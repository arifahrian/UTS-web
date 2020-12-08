<?php

namespace App\Http\Controllers;

class BisaController extends Controller
{
    public function wow()
    {
        return view("master.uts");
    }

    public function uwu()
    {
        return view("master.weblah");
    }
}