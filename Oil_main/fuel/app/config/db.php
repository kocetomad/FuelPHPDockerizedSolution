	<?php  
	return array ( 
	   'development' => array ( 
		  'type'           => 'mysqli', 
		  'connection'     => array ( 
			 'hostname'       => '172.17.0.1', 
			 'port'           => '3306', 
			 'database'       => 'testDB1', 
			 'username'       => 'root', 
			 'password'       => 'root', 
			 'persistent'     => false, 
			 'compress'       => false, 
		  ), 
		  
		  'identifier'     => '`', 
		  'table_prefix'   => '', 
		  'charset'        => 'utf8', 
		  'enable_cache'   => true, 
		  'profiling'      => false, 
		  'readonly'       => false, 
	   ),  
	   
	   'production' => array ( 
		  'type'           => 'mysqli', 
		  'connection'     => array ( 
			 'hostname'       => '172.17.0.1', 
			 'port'           => '3306', 
			 'database'       => 'testDB1', 
			 'username'       => 'root', 
			 'password'       => 'root', 
			 'persistent'     => false, 
			 'compress'       => false, 
		  ), 
		  
		  'identifier'     => '`', 
		  'table_prefix'   => '', 
		  'charset'        => 'utf8', 
		  'enable_cache'   => true, 
		  'profiling'      => false, 
		  'readonly'       => false, 
	   ), 
	);

