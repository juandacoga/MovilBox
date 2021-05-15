    <?php
        print '<link href="../Css/css.css" rel="stylesheet" type="text/css">';
        print '<Div id="first">';
        $value = $_POST['Value'];
        if($value > 0){
            /* print $value; */
            createMatriz($value);
        }elseif($value == 0){
            print("No se puede imprimir ya que el valor es 0");
        }else{
            print("No hay valor a imprimir");
        }

        function createMatriz($value){
            for($i = 0; $i < $value; $i++){
                $number2 = $value-$i;
                for($j = 0; $j < $value; $j++){
                    if ($i == $j or $j == ($number2-1)){
                        $matriz[$i][$j] = "x";
                    }else{
                        $matriz[$i][$j] = "_";
                    }
                    print $matriz[$i][$j];
                }
                print "<br>";
            }
        }
        print '</Div>';
        ?>