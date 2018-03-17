<?php

namespace App\Exceptions;

use Exception;

class CheckOwner extends Exception
{
    public function render()
    {
    	return [
    		'errors' => 'Permission Denied'
    	];
    }
}
