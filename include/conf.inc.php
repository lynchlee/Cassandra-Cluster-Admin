<?php
	/*
		Cassandra Cluster Admin
		
		@author Sébastien Giroux
		@copyright All rights reserved - 2011
	*/

	$CASSANDRA_SERVERS = array('127.0.0.1:9160'); // Add as many Cassandra nodes as you want in this array like so: array('10.70.80.90:9160','10.70.80.100:9160','10.70.80.110:9160')
	
	/*
		Enter your Cassandra credentials here if needed
	*/
	define('CASSANDRA_USERNAME','');
	define('CASSANDRA_PASSWORD','');
	
	$CREDENTIALS = null;
	if (CASSANDRA_USERNAME != '' && CASSANDRA_PASSWORD != '') {
		$CREDENTIALS = array('username' => CASSANDRA_USERNAME, 'password' => CASSANDRA_PASSWORD);
	}	
	
	/*
		Enter your Cassandra Cluster Admin credentials here
	*/
	define('CCA_LOGIN_REQUIRED',false);
	define('CCA_USERNAME','root'); 	
	define('CCA_PASSWORD','');
?>