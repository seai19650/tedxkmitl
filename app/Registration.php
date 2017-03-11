<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = [];

    public function question() {
        return $this->hasOne(Question::class);
    }

    public function random_gen() {
      $name = $this->first_name;
      $time = $this->created_at;
      $bytes = random_bytes(5);
      $token = sha1($name.$time.$bytes);
      return $token;
    }
}
