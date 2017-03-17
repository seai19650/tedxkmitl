<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function registration() {
        return $this->belongsTo(Registration::class);
    }

    public function keycard() {
        return str_random(10);
    }
}
