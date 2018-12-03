<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Board;

class Comment extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function boards() {
        return $this->belongsTo(Board::class);
    }

}
