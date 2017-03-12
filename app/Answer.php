<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function registration() {
        return $this->belongsTo(Registration::class);
    }
}
