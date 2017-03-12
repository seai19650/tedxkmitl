<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = ['question'];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function random_gen() {
      $name = $this->first_name;
      $time = $this->created_at;
      $bytes = random_bytes(5);
      $token = sha1($name.$time.$bytes);
      return $token;
    }
}
