<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function show()
    {
        $boards = Board::paginate(2);
        //return view('list_board', array('boards' => $boards));
        //for pagination
        return view('list_board')->with('boards', $boards);
    }
}
