<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class AssignmentController extends Controller
{
    public function index(Request $request)
    {   
        $directory = 'uploads/assignment/';
        $files = collect(File::files($directory));

        return view('assignments.index', compact('files'));
    }

    public function download($file_name)
    {
        $file_path = public_path('uploads/assignment/' .$file_name);
        return response()->download($file_path);
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
