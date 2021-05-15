<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>list Trigger</title>
</head>
<body>
    <div id="first">
    <h1>Listado</h1>
    <label>Codigo Trigger</label>
    <div id="code">
    <p>
        $trigger = strpos($name,"ale");<br/>
        if ($trigger === false) {<br/>
            $salary = "10000";<br/>
        }else {<br/>
            $salary = "908526";<br/>
        }<br/>
    </p>
    </div>
    <br/><br/>
    <?php
        include 'connetion.php';
        $conn = connection();
        $name = "";
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $salary;
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        print "<br>";
        $trigger = strpos($name,"ale");
        if ($trigger === false) {
            $salary = "10000";
        }else {
            $salary = "908526";
        }

        $sql = 'INSERT INTO appx_employee (id, firstname, lastname, department_id, salary, educationlevel_id) VALUES ("","'.$name.'","'.$lastname.'","1","'.$salary.'","1")';
        
        if ($conn->query($sql) === TRUE) {
            $sql1 = 'SELECT firstname,lastname,salary FROM appx_employee';
            $result = mysqli_query($conn, $sql1);
            if (mysqli_num_rows($result) > 0) {
                $rawdata = array();
                $i=0;
                while($row = mysqli_fetch_assoc($result)) {
                    print "Empleado: " . $row["firstname"]. " ".$row["lastname"]."         "."Salario: ".$row["salary"]. "<br>";
                    $rawdata[$i] = $row;
                    $i++;
                }
                print "<br>";
                print "<br>";
                print json_encode($rawdata);
            } else {
                print "0 results";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        mysqli_close($conn);
    ?>
    <div id="first">
</body>
</html>