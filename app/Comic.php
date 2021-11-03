<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // variabile fillable
    protected $fillable = ['title'. 'description', 'thumb','series', 'sale_date', 'type', 'price'];
}
