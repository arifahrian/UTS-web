<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function baru()
    {
        return view("pendaftar");
    }

    public function kuy(Request $request)
    {
        $messages = [
            'required' => ':attribute harus di isi',
            'email:rfc,dns' => 'mengisi email :attribute yang benar',
            'min' => ':attribute minimal :min karakter'
        ];

        $validasi = $request->validate([
            "email" => ['required', 'email:rfc,dns'],
            "password" => ['required', 'min:8']
        ], $messages);

        echo "Email : " - $request->get("email") . "<hr>";
        echo "Password : " - $request->get("password") . "<hr>";
    }
}