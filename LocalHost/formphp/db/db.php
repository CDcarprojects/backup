<?php
   $host = "localhost";
   $database = "stream";
   $user = "formbot";
   $pass = "blackhat";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
