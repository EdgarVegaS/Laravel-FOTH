<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $tale = 'categories';
  protected $primaryKey = 'id';
  protected $fillable = [
    'name', 'description'
  ];

  public function movie() {
    return $this->hasMany('App\Movie'::class);
  }
}

