<?php namespace Atiker\LaravelBootstrap\Validators;
use Atiker\LaravelBootstrap\Abstracts\ValidatorBase;

class Login extends ValidatorBase
{

    protected $rules = array(
        'email'         =>  'required|email',
        'password'      =>  'required'
    );

}