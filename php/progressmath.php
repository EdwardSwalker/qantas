<?php
 $dataFile=fopen("../../../db/math.txt","a"); 
 $date=date("Y/m/d");
 fwrite($dataFile,"$date,$_REQUEST[math]\r\n"); 
 fclose($dataFile);
 header("Location: http://home.puiching.edu.mo/~0700898-8/qantas/index.php");
?>  