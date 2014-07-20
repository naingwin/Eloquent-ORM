<?php

class Boy extends Eloquent {
	/**
	 * MASS ASSIGNMENT
	 * define which attributes are assignable (for security purpose)
	 * we only want these 2 attrubutes able to filled
	 */
	protected $fillable =  array('name', 'age');

	/**
	 * Define Relationships
	 * each boy HAS one girl friend
	 */
	public function girl_friend()
	{
		return $this->hasOne('Girlfriend'); //this matches the Eloquent model
	}

	/**
	 * each boy writes many love letters
	 */
	public function love_letter()
	{
		return $this->hasMany('Loveletter');
	}

	/**
	 * each boy BELONGS to a girl
	 * define our pivot table also
	 */
	public function girl()
	{
		return $this->belongsToMany('Girl');
	}
}