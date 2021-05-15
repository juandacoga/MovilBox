<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>Trigger</title>
</head>
<body>
    <div id="first">
        <h1>Trigger</h1>
        <form method="post" action="Triggerphp.php">
            <label>Ingrese Nombre:</label>
            <input type="text" name="name" id="name" required>
            <br>
            <br>
            <label for="">Ingrese Apellido:</label>
            <input type="text" name="lastname" id="lastname" required>
            <br>
            <input type="submit" name="submit" id="submit"value="Ingresar">
        </form>
        
    </div>
</body>
</html>