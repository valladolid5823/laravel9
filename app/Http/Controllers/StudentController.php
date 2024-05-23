<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        // $data['students'] = Students::all();
        // $data['students'] = Students::where('id', 1)->get();
        // Search
        // $data['students'] = Students::where('first_name', 'like', '%ne%')->get();
        // Operator
        // $data['students'] = Students::where('age', '>=', 19)->get();
        // Order by
        $data['students'] = Students::where('age', '>=', 19)->get();

        return view('students.index', $data);
    }
}
