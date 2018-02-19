<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Allimtalk;
use App\Board;
use Illuminate\Http\Request;
use Validator;

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
        $allimtalks = Allimtalk::paginate(1);
        // 모든 Rows Select
        //$allimtalks = Allimtalk::all();

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
    public function showAdminAllimtalkCreate()
    {
        //
        return view('admin.allimtalk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'call_from' => array( 'required', 
                                  'regex:/^\d{3}-\d{3,4}-\d{4}$/', 
                                  'max:13'),
            'call_to'   => array( 'required', 
                                  'regex:/^\d{3}-\d{3,4}-\d{4}$/', 
                                  'max:13'),
            'sms_txt'   => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin/allimtalk/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $alt = new Allimtalk;
        $alt->req_date  = DB::raw('NOW()'); 
        $alt->call_to   = $request->call_to;
        $alt->call_from = $request->call_from;
        $alt->sms_txt   = $request->sms_txt;
        $alt->cur_state = 0;
        $alt->msg_type  = 4;
        $alt->save();
        return redirect()->route('admin.allimtalk.setting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allimtalk  $allimtalk
     * @return \Illuminate\Http\Response
     */
    public function detail(Allimtalk $msg_seq)
    {
        //
        $alt = Allimtalk::find($msg_seq);
        return view('admin.allimtalk.detail', compact('alt'));
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
