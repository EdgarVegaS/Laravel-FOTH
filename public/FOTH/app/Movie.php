<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $primaryKey = 'id';
  public $timestamps = true;
}
