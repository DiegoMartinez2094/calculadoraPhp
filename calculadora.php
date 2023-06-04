<?php

session_start();

if (isset($_POST['numero'])) { 

if ($_POST['numero'] == "c") {
        $_SESSION['num1'] = null;
    } else if ($_POST['numero'] == "←") {              
$_SESSION['num1'] = substr($_SESSION['num1'], 0, -1);   
    }   
else if ($_POST['numero'] == "=") {
              
if (isset($_SESSION['num1'])) {
                                          
$resultado = eval('return '.$_SESSION['num1'].';');
                      
$_SESSION['num1'] = $resultado;
        }
    } 
       
else {
        if (isset($_SESSION['num1'])) {
            $_SESSION['num1'] .= $_POST['numero'];
        } else {
            $_SESSION['num1'] = $_POST['numero'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <input class="caja" type="text" name="resultado" value="<?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] : 0; ?>" readonly> <br><br>
            <button class="boton" type="submit" name="numero" value="7">7</button>
            <button class="boton" type="submit" name="numero" value="8">8</button>
            <button class="boton" type="submit" name="numero" value="9">9</button>
            <button class="boton" type="submit" name="numero" value="-">-</button> <br><br>
            <button class="boton" type="submit" name="numero" value="4">4</button>
            <button class="boton" type="submit" name="numero" value="5">5</button>
            <button class="boton" type="submit" name="numero" value="6">6</button>
            <button class="boton" type="submit" name="numero" value="+">+</button> <br><br>
            <button class="boton" type="submit" name="numero" value="1">1</button>
            <button class="boton" type="submit" name="numero" value="2">2</button>
            <button class="boton" type="submit" name="numero" value="3">3</button>
            <button class="boton" type="submit" name="numero" value="*">x</button> <br><br>
            <button class="boton" type="submit" name="numero" value="←">←</button>
            <button class="boton" type="submit" name="numero" value="0">0</button>
            <button class="boton" type="submit" name="numero" value="c">c</button>
            <button class="boton" type="submit" name="numero" value="/">/</button> <br><br>
            <button class="boton" type="submit" name="numero" value="(">(</button>
            <button class="boton" type="submit" name="numero" value=")">)</button>
            <button class="boton" type="submit" name="numero" value=".">.</button>
            <button class="boton" type="submit" name="numero" value="=">=</button>
        </form>
    </div>
</body>
</html>