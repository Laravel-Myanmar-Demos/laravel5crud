<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	protected $fillable = array('title', 'body');
}
