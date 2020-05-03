<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $primaryKey = 'id';

  public function category() {
    return $this->hasMany('App\Category');
  }

  public function favorite() {
    return $this->hasMany('App\Favorite');
  }
}

