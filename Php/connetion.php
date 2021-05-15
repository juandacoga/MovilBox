<?php
    function connection(){

        $user="root";
        $pass="";
        $server="localhost";
        $db="appx_employee";
        $con=mysqli_connect($server,$user,$pass,$db) or die ("Error: conexción a la base de datos".mysql_error());
        #mysql_select_db($db,$con) or die ("Error");
        
        return $con;

    }

?>