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

    public static function escape($post) {
        $post = str_replace("<","",$post);
        $post = str_replace(">","",$post);
        return $post;
    }
}
