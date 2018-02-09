<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoardFormRequest;
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

    public function create()
    {
        return view('create_board');
    }

    public function store(BoardFormRequest $request)
    {
        $board = new Board;
        $board->store($request->title);

        return redirect()->route('board.list');
    }
}
