<?php

Route::get('eloquent', function()
{
	// get all data from database
	$boys = Boy::with('girl_friend', 'love_letter', 'girl')->get();
	return View::make('eloquent', compact('boys'));
});
