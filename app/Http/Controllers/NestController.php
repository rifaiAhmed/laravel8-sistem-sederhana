<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NestController extends Controller
{
    public function index(Request $request)
    {
        for($i=1; $i<=10; $i++) {
            $nada[] = $i;
        }

        $data = [
          'title'   => 'Nested Loop',
          'nada'    => $nada,
        ];
        return view('nest.index', $data);
    }
    public function store(Request $request)
    {
        $data = [
            'title' => 'Tangga Nada',
            'nada'  => $request->tangga
        ];
        return view('nest.tangga', $data);
    }
}
