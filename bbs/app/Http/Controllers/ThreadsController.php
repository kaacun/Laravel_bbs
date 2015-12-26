<?php

namespace App\Http\Controllers;

use App\Http\Requests\Thread\StoreRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thread;

class ThreadsController extends Controller
{
    protected $threads;

    public function __construct(Thread $threads)
    {
        $this->threads = $threads;
    }

    public function index()
    {
        $threads = Thread::paginate(10);
        return view('bbs.index')->with('threads', $threads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = [
             'title' => $request->get('title'),
             'description' => $request->get('description'),
             'user' => $request->get('user')
         ];
         $this->threads->create($data);

        return redirect('bbs')->with('message', 'スレッドを投稿しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::findOrFail($id);
        return view('bbs.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
