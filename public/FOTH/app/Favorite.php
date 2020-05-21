<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  protected $table = 'favorites';
  protected $primaryKey = 'id';
  protected $fillable = [
    'name', 'movie_id', 'user_id'
  ];

  public function user() {
    return $this->belongsTo('App\User'::class);
  }

  public function movie() {
    return $this->hasMany('App\Movie'::class);
  }
}

