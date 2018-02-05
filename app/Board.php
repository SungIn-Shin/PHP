<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function store($title)
    {
        $board = new Board;
        $board->title = $title;
        $board->save();
    }
}
