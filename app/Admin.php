<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  protected $guard = 'admin';

  protected $fillable = [
    'name', 'email', 'password',
  ];

  public function user()
  {
    return belongsTo('users');
  }
}
