<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// Mode Table
    protected $table = 'tasks';

	// Mass Assignable fillable describes what can be filled out by web application
	protected $fillable = ['name'];

	// Excluded attributes
	protected $hidden = [];
}
