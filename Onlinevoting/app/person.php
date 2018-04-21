<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
	protected $table = 'person';
    protected $primaryKey = 'NID';
	public $timestamps = false;
}
