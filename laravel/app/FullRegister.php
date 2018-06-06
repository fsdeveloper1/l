<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FullRegister extends Model
{
    protected $table = 'FullRegisters';
	public $wasRecentlyCreated = true;
}
