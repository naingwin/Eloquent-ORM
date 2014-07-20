<?php

class Girl extends Eloquent {
	/**
	 * MASS ASSIGNMENT
	 * define which attributes are assignable (for security purpose)
	 * we only want these 2 attrubutes able to filled
	 */
	protected $fillable =  array('name', 'age');

	/**
	 * each girl BELONGS to a boy
	 * define our pivot table also
	 */
	public function boy()
	{
		return $this->belongsToMany('Boy');
	}
}