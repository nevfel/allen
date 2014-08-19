<?php

class Contact extends Eloquent
{

	protected $guarded = array("id");
	protected $fillable = array("firstname","lastname","email","subject","body","ip_address");
	
	public static $rules = array(
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
		);
}