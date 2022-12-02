<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index(){
        $data=teacher::all();
        return view('teacher',['teacher'=>$data]);
    }
}
