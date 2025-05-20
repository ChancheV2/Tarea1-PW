<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        #Tarea1{
            width: 80%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
        }

        #divMenu {
            margin: 20px 0;
            background-color: black;
            padding: 2px;
            border-radius: 5px;
            color: #f4f4f4;
            text-align: center;
        }
        
        #divMenu ul {
            list-style-type: none;
            padding: 0;
        }

        #divMenu li {
            display: inline;
            margin-right: 20px;
        }

        #divMenu a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        #divMenu a:hover {
            text-decoration: underline;
            color: #ccc;
        }

        #divContenido {
            min-height: 400px;
        }


    </style>
</head>
<body>
    <div id="Tarea1">
        <div>
            <h1>Tarea 1</h1>
            <p>📌Esta es la tarea 1 de programación web</p>
        </div>
        <div id="divMenu">
            <ul>
                <li>
                    <a href="tarjeta.php">🧾Tarjeta</a>
                </li>
                <li>
                    <a href="calculadora.php">🧮Calculadora</a>
                </li>
                <li>
                    <a href="adivina.php">🎯Adivina</a>
                </li>
                <li>
                    <a href="acercade.php">🙋‍♂️Acerca de</a>
                </li>
            </ul>
        </div>
        <div id="divContenido">