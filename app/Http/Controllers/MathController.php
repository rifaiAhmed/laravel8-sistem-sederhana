<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mathematics'
        ];
        return view('math.index', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'tinggi'    => 'required|numeric'
        ]);

        $tb = $request->tinggi;

        if ($request->gender == 'men') {
            $bi = ($tb-100)-(($tb-100)*10/100);
        } else {
            $bi = ($tb-100)-(($tb-100)*15/100);
        }
        
        $data = [
            'title' => 'Cek Berat Badan Ideal',
            'beratIdeal'    => $bi
        ];
        return view('math.ideal', $data);
    }
}
