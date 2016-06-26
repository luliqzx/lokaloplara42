<?php 
/**
* 
*/
class UserController extends BaseController
{
	
	function __construct(argument)
	{
		$this->beforeFilter('auth', array('except'=>'getLogin'));

		$this->beforeFilter('csrf', array('on'=>'post'));

		$this->afterFilter('log', array('only'=>array('fooAction', 'barAction')));
	}
}
