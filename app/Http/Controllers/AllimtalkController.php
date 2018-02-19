<?php

namespace App\Http\Controllers;

use App\Allimtalk;
use App\Board;
use Illuminate\Http\Request;

class AllimtalkController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // 관리자 - 알림톡 이용방법 페이지 호출
    public function showAdminAllimtalkUsage() {
        return view('admin.allimtalk.usage');
    }

    public function showAdminAllimtalkSetting() {
        $allimtalks = Allimtalk::paginate(10);

        //return view('list_board', array('boards' => $boards));
        //for pagination
        //return view('list_board')->with('boards', $boards);
        //return view('admin.allimtalk.setting')->with('boards', $boards);
        return view('admin.allimtalk.setting')->with('allimtalks', $allimtalks);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allimtalk  $allimtalk
     * @return \Illuminate\Http\Response
     */
    public function show(Allimtalk $allimtalk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allimtalk  $allimtalk
     * @return \Illuminate\Http\Response
     */
    public function edit(Allimtalk $allimtalk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allimtalk  $allimtalk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allimtalk $allimtalk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allimtalk  $allimtalk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allimtalk $allimtalk)
    {
        //
    }
}
