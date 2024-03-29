<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = ['question', 'submit'];

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function status() {
        return $this->hasOne(Status::class);
    }

    public function random_gen() {
      $name = $this->firstname;
      $time = $this->created_at;
      $bytes = random_bytes(5);
      $token = sha1($name.$time.$bytes);
      return $token;
    }
}
