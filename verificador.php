<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="verificador.css">
</head>
<body>
    <div class="box">
        <fieldset>
            <legend><b>Verificador 2000</b></legend>
            <form method="post">
                <label for="num">Número:</label>
                <input type="number" name="num" required><br><br>

                <input type="submit" value="Verificar">
            </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num = $_POST['num'];
    
    echo "<br>Verificador do $num:<br><br>";
    if ($num%2 == 0) {
        echo "É um Numero Par";}
    else {echo "É um Numero Impar";}
    }
    ?>
        </fieldset>       
    </div>
</body>
</html>