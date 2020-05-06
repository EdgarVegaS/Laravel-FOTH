<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = ['name']

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function movie() {
    return $this->hasMany('App\Movie');
  }
}

