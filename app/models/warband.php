<?php

class Warband extends Eloquent {

	/*
	 * Database tabel used by model
	 *
	 * @var string
	 */
	protected $table = 'warband';

	public function user()
	{
		return $this->belongsTo('User');
	}
}