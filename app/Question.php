<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function registration() {
        return $this->belongsTo(Registration::class);
    }
}
