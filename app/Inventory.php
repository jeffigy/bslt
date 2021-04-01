<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['item_name', 'price', 'supplier', 'quantity', 'reorder_level'];
}
