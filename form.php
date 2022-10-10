<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
    
    $nome = $_GET["nome"];
    $sexo = $_GET["sexo"];
    $nasc = $_GET["nasc"];
    $tele = $_GET["tele"];
    $email = $_GET["email"];

    $file = array($nome,$sexo,$nasc,$tele,$email);
    $read = json_encode($file);

     $file = fopen("test.txt", "a");
     echo fwrite($file, $read.chr(13).chr(10));
     fclose($file);

     $file = fopen("test.txt", "r");
     while(!feof($file)) {
         $line = fgets($file);
          $line. "<br>";
         $vetor[] = json_decode($read);
     }
     fclose($file);

   


     echo "<table border=\"1\">";
     echo "<tr><th>Nome</th><th>Sexo</th><th>nascimento</th><th>telefone</th><th>email</th></tr>";
     foreach($vetor as $v){
         echo "<tr>";
            foreach($v as $l){
                echo "<td>$l</td>";
            }
         echo "</tr>";
     }
     echo "</table>";


    ?>
    
</body>
</html>