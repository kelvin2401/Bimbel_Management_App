<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('courses.dashboard');
    }

    public function create() {
        $ownerId = '110078732340280929515';
        return view('courses.create',['ownerId' => $ownerId]);
    }

    public function store(Request $request) {
        $validate = $this->validate($request, [
            'name' => 'required',
            'section' => 'required'
        ]);

        
    }
}
