<?php

class Loveletter extends Eloquent {

	/**
	 * Set table
	 */
	protected $table = 'love_letters';

	/**
	 * Inverse of Relationship to Boy Model
	 */
	public function boy()
	{
		return $this->belongsTo('Boy');
	}
}