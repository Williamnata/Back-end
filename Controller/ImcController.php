
<?php
class ImcController{
    public function CalculoIMC($peso,$altura){



    
    }
}
   if(isset($_POST["peso"]) && isset($_POST["altura"])){
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);
 echo "Seu IMC é: $imc";
   }

    ?>