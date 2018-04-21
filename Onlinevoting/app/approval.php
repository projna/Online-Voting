<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approval extends Model
{
    protected $table = 'approval';
    protected $primaryKey = 'Approved_nid';
	public $timestamps = false;
}
