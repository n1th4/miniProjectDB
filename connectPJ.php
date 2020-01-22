<?php
   $connectData=mysqli_connect("localhost","root","","myproject") or die("Error: ".mysqli_error($connectData));
   mysqli_query($connectData,"SET NAMES 'utf8'");
   error_reporting( error_reporting() & ~E_NOTICE );
   date_default_timezone_set('Asia/Bangkok');
   //echo date('d/m/Y H:i:s');
?>