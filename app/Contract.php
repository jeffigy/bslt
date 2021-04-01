<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['to', 'date', 'address', 'reference', 'attention', 'area', 'project', 'salesman', 'location', 'status',
                            'titleA',
                            'quantity1', 'unit1', 'dimension1', 'price1', 'total1',
                            'quantity2', 'unit2', 'dimension2', 'price2', 'total2',
                            'quantity3', 'unit3', 'dimension3', 'price3', 'total3',
                            'quantity4', 'unit4', 'dimension4', 'price4', 'total4',
                            'quantity5', 'unit5', 'dimension5', 'price5', 'total5',
                            'list', 'disc', 'sale',
                            'quantity6', 'unit6', 'dimension6', 'price6', 'total6',
                            'quantity7', 'unit7', 'dimension7', 'price7', 'total7',
                            'quantity8', 'unit8', 'dimension8', 'price8', 'total8',
                            'quantity9', 'unit9', 'dimension9', 'price9', 'total9',
                            'quantity10', 'unit10', 'dimension10', 'price10', 'total10',
                            'list1', 'del', 'list2'];
                            
}

