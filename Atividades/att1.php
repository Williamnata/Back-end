<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $Alunos = [
    "Joao" => 8,
    "Pedro" => 5,
    "Maria" => 9,
    "Carlos" => 4,
    "Julia" => 7
];
echo "<h3>Lista de aprovado:</h3> <br>";
foreach ($Alunos as $nome => $nota) {
if($Alunos >=7){
      echo "<h4>$nome: Aprovado</h4>";
}
  
else{
     echo "<h4>$nome: Reprovado</h4>";
}
}
  ?>
  <?php
   foreach($Alunos as $name => $nota){
if($Alunos >=7){
      echo "<h3>$nome</h3>";
}
 }  ?>    


</body>
</html>