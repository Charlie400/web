<?php namespace Project\Entities;

class Contact extends \Eloquent {
	protected $fillable = ['firstname', 'lastname', 'email', 'message', 'noticeme'];
	protected $table    = 'contact';

	public function setNoticemeAttribute($value)
	{	
		if ( ! is_null($value)) $this->attributes['noticeme'] = 1;
		else $this->attributes['noticeme'] = 0;
	}
}