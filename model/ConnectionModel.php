
<?php
	
	session_Start();
	
	//Programming Naming Convention Standard = Camel Case 
	//-----------------------------
	
	//Class Name Standard = UpperCamelCase
	//Methods/Functions Name Standard = lowerCamelCase
	//Variables Name Standard = lowerCamelCase
	//---------------------------------------------------------------
	class Connection
	{
		
		var $con;
		
		function dbConnection()
		{
			$serverName = "elm-system.chuiekmcqlhs.us-east-2.rds.amazonaws.com";
			$userName = "admin";
			$password = "Admin.1234";
			$con = mysqli_connect($serverName, $userName, $password);
			
			if (!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_select_db($con, "onleavemg");
			$this->con=$con;
		}
		
		function dbCloseConnection()
		{	 
			mysqli_close($this->con);
		}
		
	}
	
?>