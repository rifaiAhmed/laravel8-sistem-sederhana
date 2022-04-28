<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $students = Students::all();
        
        $data = [
            'title' => 'All Students',
            'students' => $students,
        ];
        return view('dashboard.index', $data);
    }
    public function create()
    {
        return view('dashboard.create', [
            'title' => 'Create Student'
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns',
            'address' => 'required|max:50',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        Students::create($validateData);

        return redirect('/landing')->with('success', 'New Student Has Been Added');
    }
    public function update($id)
    {
        $student = Students::find($id);
        $data = [
            'title' => 'Student',
            'student' => $student
        ];

        return view('dashboard.student', $data);
    }
    public function edit(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns',
            'address' => 'required|max:50',
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        Students::where('id', $id)
        ->update($validateData);

        return redirect('/landing')->with('success', 'Student Has Been Updated');
    }
    public function destroy($id)
    {
        Students::destroy($id);
        return redirect('/landing')->with('destroy', 'Student Has been Deleted');
    }
    public function detail($id)
    {
        $student = Students::find($id);

        $data = [
            'title' => 'Detail',
            'student' => $student
        ];

        return view('dashboard.show', $data);
    }
}
