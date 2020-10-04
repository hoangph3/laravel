<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    public function index()
    {   
        $directory = 'uploads/assignment/';
        $allfiles = File::files($directory);

        return view('assignments.index', compact('allfiles'));
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
                
                $allfiles = File::files('uploads/assignment/');
                return view('assignments.index', compact('allfiles'));
            }
            else
            {
                return redirect()->back()->with('alert', 'File Exist!');
            }
        }
    }

    public function postSolution($folder_name, Request $request)
    {
        if ($request->hasFile('fileUpload')) 
        {
            $file = $request->fileUpload;
            $folder_path = 'uploads/solution/' .$folder_name .'/';
            $dir =  $folder_path .$file->getClientOriginalName();

            if (! File::exists($dir))
            {
                $file->move($folder_path, $file->getClientOriginalName());

                DB::table('assignments')->insert(
                    ['task' => $folder_name,
                    'username' => session('username'),
                    'filename' => $file->getClientOriginalName(),
                    'time' => now(),
                    ]);

                $allfiles = File::files('uploads/assignment/');
                return view('assignments.index', compact('allfiles'));
            }
            else
            {
                return redirect()->back()->with('alert', 'File Exist!');
            }
        }
    }

    public function showSubmit($folder_name)
    {
        $assignment = $folder_name;
        $submits = (DB::table('assignments')->where('task', $folder_name))->simplePaginate(5);
        return view('assignments.submission', compact('submits', 'assignment'));
    }

    public function clone($folder_name, $file_name)
    {
        $file_path = public_path('uploads/solution/' .$folder_name .'/' .$file_name);
        return response()->download($file_path);
    }
}
