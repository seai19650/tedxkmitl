<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function transaction() {
        return $this->belongsTo(Registration::class);
    }
}
