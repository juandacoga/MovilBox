<?php
    print '<link href="../Css/css.css" rel="stylesheet" type="text/css">';
    print '<Div id="first">';
    $myArray[0] = $_POST['number1']; 
    $myArray[1] = $_POST['number2']; 
    $myArray[2] = $_POST['number3']; 
    $myArray[3] = $_POST['number4']; 
    $myArray[4] = $_POST['number5']; 
    $myArray[5] = $_POST['number6']; 
    $myArray[6] = $_POST['number7']; 
    $myArray[7] = $_POST['number8']; 
    $myArray[8] = $_POST['number9']; 
    $myArray[9] = $_POST['number10']; 



    $count1 = 0;
    $count2 = 0;
    $count3 = 0;
    $count4 = 0;
    $count5 = 0;

    for ($i=0; $i < 10; $i++) { 
        switch ($myArray[$i]) {
            case 1:
                $count1++;
                break;
            case 2:
                $count2++;
                break;
            case 3:
                $count3++;
                break;
            case 4:
                $count4++;
                break;
            case 5:
                $count5++;
                break;
            default:
                print ("Invalid");
                break;
        }
    }
    print ("1:");
    for ($i=0; $i < $count1; $i++) { 
        print ("*");
    }
    print ("<br>");
    print ("2:");
    for ($i=0; $i < $count2; $i++) { 
        print ("*");
    }
    print ("<br>");
    print ("3:");
    for ($i=0; $i < $count3; $i++) { 
        print ("*");
    }
    print ("<br>");
    print ("4:");
    for ($i=0; $i < $count4; $i++) { 
        print ("*");
    }
    print ("<br>");
    print ("5:");
    for ($i=0; $i < $count5; $i++) { 
        print ("*");
    }

    print '</Div>';
?>