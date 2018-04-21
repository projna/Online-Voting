<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persontype extends Model
{
    
    protected $table = 'persontype';
    protected $primaryKey = 'persontypeid';
	public $timestamps = false;
}
