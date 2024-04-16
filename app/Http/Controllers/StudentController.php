<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {

        $result = Student::all();
        $students =  json_encode($result);
        return $students;
    }

    public function store(Request $request)
    {
        
      $statement = $request->all();
        
        $result = Student::create($statement);
       
        
        if ($statement) {
            $response = [
                'status' => 'ok',

                'message' => 'successfully added quote'
            ];
        } else {
            $response = [
                'status' => 'ok',
                'message' => 'successfully added quote'
            ];
        }
        echo json_encode($response);
    }
}
