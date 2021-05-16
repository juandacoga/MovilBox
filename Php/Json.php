<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>JSON</title>
</head>
<body>
<div id="first">
        <h1>Consulta SQL</h1>
        <label>Codigo Consulta</label>
    <div id="code">
        <p>
        SELECT SUM(E.salary) As salary, D.id AS id <br/>
        FROM appx_employee E INNER JOIN appx_department D ON E.department_id = D.id <br/>
        GROUP BY D.department_name<br/>
        SELECT E.lastname AS lastname, L.description AS levelE <br/>
        FROM appx_employee E INNER JOIN appx_educationlevel L ON L.id = E.educationlevel_id <br/>
        INNER JOIN appx_department D ON E.department_id = D.id <br/>
        WHERE d.id =".$row["id"]. ' ORDER BY E.lastname<br/>
        </p>
    </div>    
    <div id="container">
    <?php
        include 'connetion.php';
        $conn = connection();

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        

        $sql = 'SELECT SUM(E.salary) As salary, D.id AS id FROM appx_employee E INNER JOIN appx_department D ON E.department_id = D.id GROUP BY D.department_name';

        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            $rawdata = array();
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
                if ($row["salary"] > 250000) {
                    $sql2 = 'SELECT E.lastname AS lastname, L.description AS levelE FROM appx_employee E INNER JOIN appx_educationlevel L ON L.id = E.educationlevel_id INNER JOIN appx_department D ON E.department_id = D.id WHERE D.id ='.$row["id"]. ' ORDER BY E.lastname ';
                    $result2 = mysqli_query($conn, $sql2);
                    if (mysqli_num_rows($result2) > 0) {
                        
                        while($row2 = mysqli_fetch_assoc($result2)) {
                            print "Apellido: " . $row2["lastname"]. " - Nivel Educativo: " . $row2["levelE"]. "<br>";
                            $rawdata[$i] = $row2;
                            $i++;
                        }
                    }
                    
                }
            }
        } else {
            print "0 results";
        }
        print "<br>";
        print "<br>";
        print json_encode($rawdata);
      mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>