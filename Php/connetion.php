<?php
    function connection(){

        $user="235542";
        $pass="0799Juan";
        $server="mysql-juandastick.alwaysdata.net";
        $db="juandastick_mobilbox";
        $con=mysqli_connect($server,$user,$pass,$db) or die ("Error: conexción a la base de datos".mysql_error());
        #mysql_select_db($db,$con) or die ("Error");
        
        return $con;

    }

?>