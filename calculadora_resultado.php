<?php require('partes/head.php'); 
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$operacion = $_GET['operacion'];

$resultado = 0;
switch ($operacion) {
    case 'suma':
        $resultado = $num1 + $num2;
        break;
    case 'resta':
        $resultado = $num1 - $num2;
        break;
    case 'multiplicacion':
        $resultado = $num1 * $num2;
        break;
    case 'division':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "Error: Division por cero no es permitida.";
        }
        break;
        default:
          echo "Operacion no valida.";
          exit();
}

if(is_numeric($resultado)){
    $resultado = number_format($resultado, 2);
}

?>

<h2>Resultado de la calculadora</h2>
<p>El resultado de la <?php echo $operacion; ?> entre <?php echo $num1; ?> y <?php echo $num2; ?> es: <strong><?php echo $resultado; ?></strong></p>

<a href="calculadora.php">Volver a la calculadora</a>
<?php require('partes/foot.php'); ?>
