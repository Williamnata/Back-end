<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form method="post">
            <div>
                <h1>Descubra seu peso</h1>
                <p>Insira seu peso</p>
                <input type="text" name="peso">
                <p>Insira sua altura</p>
                <input type="text" name="altura">
                <button type="submit">Calcular</button>
            </div>

        </form>
    </div>
    <?php
    require "../Controller/ImcController.php";

    $imcControl = new ImcController();

    if (isset($_POST["peso"]) && isset($_POST["altura"])) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $resultado = $imcControl->CalculoIMC($peso, $altura);

     

        echo "Seu IMC é: " . $resultado["imc"] . "<br>";
        echo "Sua condição é: " . $resultado["faixa"];
    }

    ?>
</body>

</html>