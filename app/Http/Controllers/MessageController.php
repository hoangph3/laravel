<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = (DB::table('messages')->where('sender',session('username')))->simplePaginate(3);
        $inbox = (DB::table('messages')->where('receiver',session('username')))->simplePaginate(3);

        return view('messages.index', compact('messages', 'inbox'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message([
            'sender' => $request->get('sender'),
            'receiver' => $request->get('receiver'),
            'content' => $request->get('content'),
            'time' => now(),
        ]);
        $message->save();
        return redirect()->route('messages.index')->with('success','Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('messages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('messages.edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        $message->sender = $request->get('sender');
        $message->receiver = $request->get('receiver');
        $message->content = $request->get('content');
        
        $message->save();  
        return redirect()->route('messages.index')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')
                        ->with('success','Deleted Successfully!');
    }
}
