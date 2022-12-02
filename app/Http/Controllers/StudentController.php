<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student = student::with('class')->get();
       return view('student', compact('student'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class= ClassRoom::all();
        return view('form', compact( 'class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' =>'required',
            'jenis_kelamin' => 'required',
            'class_id' => 'required',
        ]);

        $input = $request->all();
        student::create($input);

        return redirect('/student')
                ->with('success','Student data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::findOrFail($id);
        return view('detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class= ClassRoom::all();
        $student = student::findOrFail($id);
        return view('edit', compact('student', 'class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'alamat' =>'required',
            'jenis_kelamin' => 'required',
            'class_id' => 'required',
        ]);

         $student = student::findOrFail($id);
        $input = $request->all();
        $student->update($input);

        return redirect('/student')
                ->with('success','Student data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);
        $student->delete();

        return redirect('/student')
        ->with('success','Student data deleted successfully');
    }
}
