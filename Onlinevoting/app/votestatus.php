<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class votestatus extends Model
{
    
    protected $table = 'votestatus';
    protected $primaryKey = 'NIDv';
	public $timestamps = false;
}
