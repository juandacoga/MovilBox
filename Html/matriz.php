<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/css.css" rel="stylesheet" type="text/css">
    <title>Matriz</title>
</head>
<body>
    <div id="first">
        <h1>Matriz</h1>
        <form action="../Php/ImprimirM.php" method="POST">
            <label for="">Ingrese nueve números del 1 al 9</label>
            <br>
            <input type="number" name="number1" id="number1" min="1" max="9" required>
            
            <input type="number" name="number2" id="number2" min="1" max="9" required>
            
            <input type="number" name="number3" id="number3" min="1" max="9" required>
            <br><br>
            <input type="number" name="number4" id="number4" min="1" max="9" required>
            
            <input type="number" name="number5" id="number5" min="1" max="9" required>
            
            <input type="number" name="number6" id="number6" min="1" max="9" required>
            <br><br>
            <input type="number" name="number7" id="number7" min="1" max="9" required>
            
            <input type="number" name="number8" id="number8" min="1" max="9" required>
            
            <input type="number" name="number9" id="number9" min="1" max="9" required>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>