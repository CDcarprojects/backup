<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "dave";
   $password = "blackhat";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
