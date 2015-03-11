<?php namespace Project\Entities;

class Request extends \Eloquent {
	protected $fillable = ['ip', 'slug'];
	protected $table = 'requests';
}