<?php
defined('BASEPATH') or exit ('no direct script access allowed');
	class Testdb extends CI_Controller
	{
		function __construct()
		{
		}

		public function index()
		{
			ini_set('display_errors', 'off');

	// load the database config file
			if(file_exists($file_path = APPPATH. 'config/database.php'))
			{
				include($file_path);
			}

			$config = $db[$active_group];

		// Check database connection if using mkysqli driver
			if( $config['dbdriver'] === 'mysqli')
			{
				$mysqli = new mysqli($config['hostname'], $config['username'], $config['password'], $config['database']);
			if( !$mysqli->connect_error)
			{
				echo "Success";
				$mysqli->close();
				return true;
			}	
			$mysqli->close();
			}
			return false;
		}
	}
?> 