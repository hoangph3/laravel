<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
    public function index()
    {   
        $challenges = DB::table('challenges')->simplePaginate(3);
        return view('challenges.index', ['challenges'=>$challenges]);
    }

    public function upload(Request $request)
    {   
        if ($request->hasFile('fileUpload')) 
        {
            $file = $request->fileUpload;
            $foldername = (string) Str::orderedUuid();
            $dir = 'uploads/challenge/' .$foldername .'/' ;

            $file->move($dir , $file->getClientOriginalName());

            DB::table('challenges')->insert(
                ['name' => $foldername,
                'suggest' => $request->get('suggest'),
                ]);
            
            return redirect()->back();
        }
    }
    public function show($folder)
    {
        $challenge = DB::table('challenges')->where('name',$folder);
        $hint = $challenge->value('suggest');
        return view('challenges.solve', compact('hint', 'folder'));
    }

    public function solution($folder, Request $request)
    {
        $answer = $request->get('answer') .'.txt';
        $dir = 'uploads/challenge/' .$folder .'/';
        $filename = $dir .$answer;
        
        $answer_maybe = $request->get('answer');
        $filename_maybe = $dir .$answer_maybe;

        if (File::exists($filename))
        {
            $content = File::get(public_path($filename));
            return view('challenges.solution', compact('content'))->with('alert', 'Correct Answer!');
        }
        else if (File::exists($filename_maybe))
            {                
                $content = File::get(public_path($filename_maybe));
                return view('challenges.solution', compact('content'))->with('alert', 'Correct Answer!');
            }
            else 
            {
                return redirect()->back()->with('alert', 'Wrong Answer!');
            }
    }
}
