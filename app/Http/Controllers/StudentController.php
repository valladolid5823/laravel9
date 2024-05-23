<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $data['students'] = Students::where('age', '>=', 19)->orderBy('id', 'desc')->get();
        // Limit
        // $data['students'] = Students::where('age', '>=', 19)->orderBy('id', 'desc')->limit(5)->get();

        // Custom query for Group by
        // $data['students'] = DB::table('students')
        //     ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        // First or Fail | return error if data not dount in the database
        $data['students'] = Students::where('id', 100)->firstOrFail()->get();
        return view('students.index', $data);
    }

    public function show($id) {

        $data['students'] = Students::findOrFail($id);
        return view('students.index', $data);
    }
}
