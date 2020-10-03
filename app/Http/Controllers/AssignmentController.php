<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {  
        return view('assignments.index');
    }

    public function upload(Request $request)
    {  
        if ($request->hasFile('fileUpload')) 
        {
            $file = $request->fileUpload;

            $file->move('uploads/assignment/', $file->getClientOriginalName());
        }
    }
}
