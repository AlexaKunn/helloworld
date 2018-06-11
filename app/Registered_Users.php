<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered_Users extends Model
{
  protected $table = 'registered_users';
  protected $fillable = ['first_name','last_name','address_1','address_2','city','state','zip','country'];

}
