<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $table = "movies";
  protected $primaryKey = 'id';
  protected $fillable = [
    'name', 'description', 'url', 'category_id'
  ];

  public function category() {
    return $this->hasMany('App\Category');
  }

  public function favorite() {
    return $this->hasMany('App\Favorite');
  }
}

