<?php

namespace App\Http\Controllers;

class UtsController extends Controller
{
	public function pertama()
	{
		return view("satu");
    }
    
    public function kedua()
	{
		return view("dua");
    }
    
    public function ketiga()
	{
		return view("tiga");
    }
    
    public function keempat()
	{
		return view("empat");
	}
}