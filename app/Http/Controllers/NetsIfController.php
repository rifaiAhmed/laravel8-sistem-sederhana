<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class NetsIfController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cek Angka Genap Atau Ganjil',
        ];

        return view('nestif.index', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required|numeric',
            'second' => 'required|numeric'
        ]);
        
        $first = $request->first%2;
        $second = $request->second%2;
        if($first == 0){
            $firstColor = 'green';
        } else {
            $firstColor = 'blue';
        }

        if($second == 0) {
            $secondColor = 'green';
        } else {
            $secondColor = 'blue';
        }

        $data = [
            'title' => 'Cek Angka',
            'first' => $firstColor,
            'second' => $secondColor
        ];

        return view('nestif.color', $data);
    }
}
