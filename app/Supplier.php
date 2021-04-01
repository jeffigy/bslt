<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['company', 'phone', 'first_name', 'last_name', 'email', 'city', 'province'];
}
