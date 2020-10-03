<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
            $dir = 'uploads/assignment/' . $file->getClientOriginalName();

            if (! File::exists($dir))
            {
                $file->move('uploads/assignment/', $file->getClientOriginalName());
                
                $folder = 'uploads/solution/' . $file->getClientOriginalName();
                File::makeDirectory($folder);
                
                return view('assignments.index');
            }
            else
            {
                echo "<script>alert('File Exist!');</script>";
            }
        }
    }
}
