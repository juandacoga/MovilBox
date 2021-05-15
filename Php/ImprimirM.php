<?php
    print '<link href="../Css/css.css" rel="stylesheet" type="text/css">';
    print '<Div id="first">';
    $myArray[0][0] = $_POST['number1']; 
    $myArray[0][1] = $_POST['number2']; 
    $myArray[0][2] = $_POST['number3']; 
    $myArray[1][0] = $_POST['number4']; 
    $myArray[1][1] = $_POST['number5']; 
    $myArray[1][2] = $_POST['number6']; 
    $myArray[2][0] = $_POST['number7']; 
    $myArray[2][1] = $_POST['number8']; 
    $myArray[2][2] = $_POST['number9']; 

    #5,1,7,3,5,6,2,4,8

    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            print $myArray[$i][$j] . " ";
        }
        print "<br>";
    }
    print "<br>";
    print "<br>";

    $tmp = 100;

    #Primer resultado
    $value1 = $myArray[0][0];
    $sum1[0][0] = $value1+$myArray[0][1];
    $sum1[0][1] = $myArray[0][1];
    $sum1[1][0] = $value1+$myArray[1][1];
    $sum1[1][1] = $myArray[1][1];
    $container1=0;

    for ($i=0; $i < 2; $i++) {  
        if ($i == 0){
            for ($j=0; $j < 2; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum1[0][0] += $tmp;
            $sum1[0][2] = $tmp;
            $tmp = 100;
        } elseif ($i == 1) {
           
            for ($j=0; $j < 3; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum1[1][0] += $tmp;
            $sum1[1][2] = $tmp;
            $tmp = 100;
        }
    }
    for ($i=0; $i < 2; $i++) { 
        if ($sum1[$i][0] < $tmp) {
            $tmp = $sum1[$i][0];
            $container1 = $i;
        }
       # print "<br>";
    }
    #print $sum1[$container1][0];
    #print $container1;
    print "<br>";


    #Segundo resultado
    $value2 = $myArray[1][0];
    $sum2[0][0] = $value2+$myArray[0][1];
    $sum2[0][1] = $myArray[0][1];
    $sum2[1][0] = $value2+$myArray[1][1];
    $sum2[1][1] = $myArray[1][1];
    $sum2[2][0] = $value2+$myArray[2][1];
    $sum2[2][1] = $myArray[2][1];
    $container2=0;

    $tmp = 100;

    for ($i=0; $i < 3; $i++) {  
        if ($i == 0){
            for ($j=0; $j < 2; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum2[0][0] += $tmp;
            $sum2[0][2] = $tmp;
            $tmp = 100;
        } elseif ($i == 1) {
           
            for ($j=0; $j < 3; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum2[1][0] += $tmp;
            $sum2[1][2] = $tmp;
            $tmp = 100;
        } elseif ($i == 2) {
           
            for ($j=1; $j < 3; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum2[2][0] += $tmp;
            $sum2[2][2] = $tmp;
            $tmp = 100;
        }
    }
    for ($i=0; $i < 3; $i++) { 
        if ($sum2[$i][0] < $tmp) {
            $tmp = $sum2[$i][0];
            $container2 = $i;
        }
        #print "<br>";
    }
    #print $sum2[$container2][0];
    #print $container2;


    #Tercer resultado
    $value3 = $myArray[2][0];
    $sum3[0][0] = $value3+$myArray[1][1];
    $sum3[0][1] = $myArray[1][1];
    $sum3[1][0] = $value3+$myArray[2][1];
    $sum3[1][1] = $myArray[2][1];
    $container3=0;

    $tmp = 100;

    for ($i=1; $i < 3; $i++) {  
        if ($i == 1){
            for ($j=0; $j < 3; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum3[0][0] += $tmp;
            $sum3[0][2] = $tmp;
            $tmp = 100;
        } elseif ($i == 2) {
           
            for ($j=1; $j < 3; $j++) { 
                if ($myArray[$j][2] < $tmp){
                    $tmp = $myArray[$j][2];
                }
            }
            $sum3[1][0] += $tmp;
            $sum3[1][2] = $tmp;
            $tmp = 100;
        }
    }
    print "<br>";
    for ($i=0; $i < 2; $i++) { 
        if ($sum3[$i][0] < $tmp) {
            $tmp = $sum3[$i][0];
            $container3 = $i;
        }
        
        #print "<br>";
    }
    #print $sum3[$container3][0];
    #print $container3;
    print "<br>";


    #Determinar menor
    if ($sum1[$container1][0] < $sum2[$container2][0] and $sum1[$container1][0] < $sum3[$container3][0]) {
        print "Ruta con menor suma posible: ".$value1.", ".$sum1[$container1][1].", ".$sum2[$container1][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum1[$container1][0];
    }elseif ($sum2[$container2][0] < $sum1[$container1][0] and $sum2[$container2][0] < $sum3[$container3][0]) {
        print "Ruta con menor suma posible: ".$value2.", ".$sum2[$container2][1].", ".$sum2[$container2][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum2[$container2][0];
    }elseif ($sum3[$container3][0] < $sum1[$container1][0] and $sum3[$container3][0] < $sum2[$container2][0]) {
        print "Ruta con menor suma posible: ".$value3.", ".$sum3[$container3][1].", ".$sum2[$container3][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum3[$container3][0];
    }elseif ($value1 < $value2 and $value1 < $value3){
        print "Ruta con menor suma posible: ".$value1.", ".$sum1[$container1][1].", ".$sum2[$container1][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum1[$container1][0];
    }elseif ($value2 < $value1 and $value2 < $value3){
        print "Ruta con menor suma posible: ".$value2.", ".$sum2[$container2][1].", ".$sum2[$container2][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum2[$container2][0];
    }elseif ($value3 < $value1 and $value3 < $value2){
        print "Ruta con menor suma posible: ".$value3.", ".$sum3[$container3][1].", ".$sum2[$container3][2]."";
        print "<br>";
        print "<br>";
        print "La suma es: ".$sum3[$container3][0];
    }else {
        print "Error";
    }


    print '</Div>';



    
?>