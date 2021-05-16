<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>SQLJson</title>
</head>
<body>
    <h1>Consulta SQL</h1>
    <label>Codigo Consulta</label>
    <div id="code">
        <p>
        SELECT D.department_name AS department, L.description AS levelEd, COUNT(E.id) AS employee, SUM(E.salary) AS salary <br/>
        FROM appx_employee E INNER JOIN appx_department D ON D.id = E.department_id <br/>
        INNER JOIN appx_educationlevel L on l.id = E.educationlevel_id <br/>
        GROUP BY d.department_name <br/>
        </p>
    </div>    
    <div id="container">
    <?php
        include 'connetion.php';
        $conn = connection();

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        

        $sql = 'SELECT D.department_name AS department, L.description AS levelEd, COUNT(E.id) AS employee, SUM(E.salary) AS salary FROM appx_employee E INNER JOIN appx_department D ON D.id = E.department_id INNER JOIN appx_educationlevel L on L.id = E.educationlevel_id GROUP BY D.department_name';

        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            $rawdata = array();
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
                
                print "Departamento: " . $row["department"]. " - Nivel Educativo: " . $row["levelEd"]." - Empleados: " . $row["employee"]. " - Salario: " . $row["salary"]. "<br>";
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
</body>
</html>