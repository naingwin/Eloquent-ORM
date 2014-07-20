<?php

Route::get('eloquent', function()
{
	// get all data from database
	$boys = Boy::with('girlFriend', 'loveLetter', 'girl')->get();
	return View::make('eloquent', compact('boys'));
});
