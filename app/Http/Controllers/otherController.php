<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otherController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Other'
        ];

        return view('other.index', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required|max:20',
            'second'    => 'required|max:20'
        ]);
        // input pertama
        $kalimat = $request->first;
        // hitung jumlah string karakter dengan duplikat juga
        $count = strlen($kalimat);

        // masukan ke dalam array
        for ($i=0; $i < $count; $i++) { 
            $array[] = substr($kalimat, $i, 1);
        }
        // hitung jumlah array
        $cnt = count($array);
        // bagi 100% untuk mengetahui nilai perkarakter
        $valueOne = 100/$cnt;

        // cek pada input kedua
        $kalimat2 = $request->second;

        foreach ($array as $key) {
            $hasil = stripos($kalimat2, $key);
            if($hasil !== false) {
                $charOk[] = $key;
            }
        }

        $persentase = count($charOk)*$valueOne;

        $data = [
            'title' => 'Presentase',
            'jumlahChar' => $cnt,
            'arrayChar' => $charOk,
            'presentase'    => $persentase
        ];

        return view('other.hasil', $data);
    }
}
