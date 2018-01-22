<?php

use \Jacwright\RestServer\RestException;

class Proxy
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /proxy
     */
    public function test()
    {
		$host = "squid.local";
		$port = 8888;
		$username = "chuck";
		$password = "norris";
		
		return array(
			"host" => $host, 
			"port" => $port, 
			"username" => $username,
			"password" => $password);
    }
	
	 /**
     * Throws an error
     * 
     * @url GET /error
     */
    public function throwError() {
        throw new RestException(401, "Empty password not allowed");
    }
}
