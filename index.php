<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio de php</title>
</head>
<body>

<?php
echo "<h1 style='color:blue'>Laboratorio de php progra4, Fabian Herra.</h1>";
echo "<h2>Ejercicio 1:</h2>";
echo "Hola mundo";
echo "<h2>Ejercicio 2:</h2>";
?>

<form method="POST" action="">
    <label for="Numero1">Ingrese el primer número:</label>
    <input type="number" id="Numero1" name="Numero1" required>
    <br><br>
    <label for="Numero2">Ingrese el segundo número:</label>
    <input type="number" id="Numero2" name="Numero2" required>
    <br><br>
    <button type="submit" name="suma">Sumar</button>
    <br><br>
</form>

<?php
if (isset($_POST["suma"])) {
    $numero1 = $_POST["Numero1"];
    $numero2 = $_POST["Numero2"];
    $suma = $numero1 + $numero2;
    echo "La suma de $numero1 y $numero2 es: $suma";
}
?>

<?php
echo "<h2>Ejercicio 3: Calcular Área de un Triángulo</h2>";
?>

<form method="POST" action="">
    <label for="base">Ingrese la base:</label>
    <input type="number" id="base" name="base" required>
    <br><br>
    <label for="altura">Ingrese la altura:</label>
    <input type="number" id="altura" name="altura" required>
    <br><br>
    <button type="submit" name="triangulo">Calcular Area Triángulo</button>
    <br><br>
</form>

<?php
if (isset($_POST["triangulo"])) {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $area = ($base * $altura) / 2;
    echo "El área del triángulo con base $base y altura $altura es: $area";
}
?>

<?php
echo "<h2>Ejercicio 4: Calcular el area de un Cirulo</h2>";
?>

<form method="POST" action="">
    <label for="radio">Ingrese el radio:</label>
    <input type="number" id="radio" name="radio" required>
    <br><br>
    <button type="submit" name="circulo">Calcular Area Círculo</button>
    <br><br>
</form>

<?php
if (isset($_POST["circulo"])) {
    $radio = $_POST["radio"];
    $area = pi() * pow($radio, 2);
    echo "El área del círculo con radio $radio es: $area";
}
?>

<?php
echo "<h2>Ejercicio 5: Calculadora</h2>";
?>

<form method="POST" action="">
    <label for="num1">Ingrese el primer número:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>
    <label for="num2">Ingrese el segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    <br><br>
    <button type="submit" name="calculadora">Calcular</button>
    <br><br>
</form>

<?php
if (isset($_POST["calculadora"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = ($num2 != 0) ? ($num1 / $num2) : "No se puede dividir por cero";
    
    echo "Resultados para los números $num1 y $num2:<br>";
    echo "Suma: $suma<br>";
    echo "Resta: $resta<br>";
    echo "Multiplicación: $multiplicacion<br>";
    echo "División: $division<br>";
}
?>

<?php
echo "<h2>Ejercicio 6: Calcular promedio de 5 numeros</h2>";
?>

<form method="POST" action="">
    <label for="numA">Número 1:</label>
    <input type="number" id="numA" name="numA" required>
    <br><br>
    <label for="numB">Número 2:</label>
    <input type="number" id="numB" name="numB" required>
    <br><br>
    <label for="numC">Número 3:</label>
    <input type="number" id="numC" name="numC" required>
    <br><br>
    <label for="numD">Número 4:</label>
    <input type="number" id="numD" name="numD" required>
    <br><br>
    <label for="numE">Número 5:</label>
    <input type="number" id="numE" name="numE" required>
    <br><br>
    <button type="submit" name="promedio">Calcular Promedio</button>
    <br><br>
</form>

<?php
if (isset($_POST["promedio"])) {    
    $numA = $_POST["numA"];
    $numB = $_POST["numB"];
    $numC = $_POST["numC"];
    $numD = $_POST["numD"];
    $numE = $_POST["numE"];
    
    $promedio = ($numA + $numB + $numC + $numD + $numE) / 5;
    
    echo "El promedio de los números ingresados es: $promedio";
}

?>

<?php
echo "<h2>Ejercicio 7: Calcular fibonacci segun tamaño que pida el usuario</h2>";
?>

<form method="POST" action="">
    <label for="fibonacciSize">Ingrese el tamaño de la secuencia Fibonacci:</label>
    <input type="number" id="fibonacciSize" name="fibonacciSize" required>
    <br><br>
    <button type="submit" name="fibonacci">Calcular Fibonacci</button>
    <br><br>
</form>

<?php
if (isset($_POST["fibonacci"])) {
    $size = $_POST["fibonacciSize"];
    $fibonacciSequence = [];
    
    for ($i = 0; $i < $size; $i++) {
        if ($i == 0) {
            $fibonacciSequence[] = 0;
        } elseif ($i == 1) {
            $fibonacciSequence[] = 1;
        } else {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
    }
    
    echo "La secuencia Fibonacci de tamaño $size es: " . implode(", ", $fibonacciSequence);
}
?>

<?php
echo "<h2>Ejercicio 8: Números Random</h2>";
?>

<form method="POST" action="">
    <label for="cantidad">¿Cuántos números desea generar?</label>
    <input type="number" id="cantidad" name="cantidad" required>
    <br><br>

    <label for="min">Límite minimo:</label>
    <input type="number" id="min" name="min" required>
    <br><br>

    <label for="max">Límite maximo:</label>
    <input type="number" id="max" name="max" required>
    <br><br>

    <label>¿Permitir repetidos?</label>
    <input type="radio" name="repetidos" value="si"> Sí
    <input type="radio" name="repetidos" value="no"> No
    <br><br>

    <button type="submit" name="random">Generar</button>
    <br><br>
</form>

<?php
if (isset($_POST["random"])) {
    $cantidad = $_POST["cantidad"];
    $min = $_POST["min"];
    $max = $_POST["max"];
    $repetidos = $_POST["repetidos"];
    $numeros = [];

    if ($repetidos == "si") {
        for ($i = 0; $i < $cantidad; $i++) {
            $numeros[] = rand($min, $max);
        }
    } else {
        while (count($numeros) < $cantidad) {
            $num = rand($min, $max);
            if (!in_array($num, $numeros)) {
                $numeros[] = $num;
            }
        }
    }

    echo "Números generados: " . implode(", ", $numeros);
}
?>

<?php
echo "<h2>Ejercicio 9: Tabla de conversion de onzas, libras y kilogramos para convertir cantidades</h2>";
?>

<form method="POST" action="">
    <label for="cantidad">Ingrese la cantidad a convertir:</label>
    <input type="number" id="cantidad" name="cantidad" required>
    <br><br>

    <label for="unidad">Seleccione la unidad de origen:</label>
    <select id="unidad" name="unidad" required>
        <option value="onzas">Onzas</option>
        <option value="libras">Libras</option>
        <option value="kilogramos">Kilogramos</option>
    </select>
    <br><br>

    <button type="submit" name="convertir">Convertir</button>
    <br><br>
</form>

<?php
if (isset($_POST["convertir"])) {
    $cantidad = $_POST["cantidad"];
    $unidad = $_POST["unidad"];
    $onzas = 0;
    $libras = 0;
    $kilogramos = 0;

    switch ($unidad) {
        case "onzas":
            $onzas = $cantidad;
            $libras = $cantidad * 0.0625;
            $kilogramos = $cantidad * 0.0283495;
            break;
        case "libras":
            $onzas = $cantidad * 16;
            $libras = $cantidad;
            $kilogramos = $cantidad * 0.453592;
            break;
        case "kilogramos":
            $onzas = $cantidad * 35.274;
            $libras = $cantidad * 2.20462;
            $kilogramos = $cantidad;
            break;
    }

    echo "Cantidad convertida:<br>";
    echo "Onzas: " . round($onzas, 2) . "<br>";
    echo "Libras: " . round($libras, 2) . "<br>";
    echo "Kilogramos: " . round($kilogramos, 2) . "<br>";
}

?>

<?php
echo "<h2>Ejercicio 10: Operaciones según los números</h2>";
?>

<form method="POST" action="">
    <label for="n1">Ingrese el primer número:</label>
    <input type="number" id="n1" name="n1" required>
    <br><br>
    <label for="n2">Ingrese el segundo número:</label>
    <input type="number" id="n2" name="n2" required>
    <br><br>
    <button type="submit" name="ejercicio10">Calcular</button>
    <br><br>
</form>

<?php
if (isset($_POST["ejercicio10"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if ($n1 == $n2) {
        $resultado = $n1 * $n2;
        echo "Son iguales, multiplicación: $resultado";
    } elseif ($n1 > $n2) {
        $resultado = $n1 - $n2;
        echo "El primero es mayor, resta: $resultado";
    } else {
        $resultado = $n1 + $n2;
        echo "El segundo es mayor, suma: $resultado";
    }
}
?>


</body>
</html>