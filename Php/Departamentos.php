<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>Departamentos</title>
</head>
<body>
    <div id="first">
        <h1>Consulta SQL</h1>
        <label>Codigo Consulta</label>
        <div id="code">
        <p>SELECT D.department_name AS department, COUNT(E.id) AS employees <br/>
            FROM appx_department D INNER JOIN appx_employee E ON D.id = E.department_id <br/>
            GROUP BY D.department_name <br/>
            HAVING COUNT(E.id)>=2
        </p>
        </div>
        <div id="container">
        <?php
        include 'connetion.php';
        $conn = connection();

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = 'SELECT D.department_name AS department, COUNT(E.id) AS employees FROM appx_department D INNER JOIN appx_employee E ON D.id = E.department_id GROUP BY D.department_name HAVING COUNT(E.id)>=2';

        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $rawdata = array();
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
                print "Departamento: " . $row["department"]. " - Empleados: " . $row["employees"]. "<br>";
                $rawdata[$i] = $row;
                $i++;
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
