<?php

class Girlfriend extends Eloquent {

	
	/**
	 * Set table
	 */
	protected $table = 'girl_friend';

	/**
	 * Inverse of Relationship to Boy Model
	 */
	public function boy()
	{
		return $this->belongsTo('Boy');
	}
}