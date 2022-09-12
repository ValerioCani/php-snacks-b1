<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $classe = [
        $alunno1 = [
            "nome" => "Luca",
            "cognome" => "Rossi",
            "voti" => [
                7,
                8,
                5,
                7,
                6
            ], 
        ],
        $alunno2 = [
            "nome" => "Gloria",
            "cognome" => "Bianchi",
            "voti" => [
                5,
                3,
                6,
                4
            ], 
        ],
        $alunno3 = [
            "nome" => "Lucia",
            "cognome" => "Verdi",
            "voti" => [
                8,
                10,
                9,
                7,
                10,
                9,
                8
            ], 
        ],
    ]
    ?>
    <ul>
        <?php
            for($i=0; $i<count($classe); $i++){
                $alunno = $classe[$i];
                echo "<p>nome: ". $alunno["nome"]. "/ cognome: ". $alunno["cognome"]. "</p>";
                $mediavoti = ceil(array_sum($alunno["voti"]) / count($alunno["voti"]) * 10) / 10;
                echo "<p>Voto in Pagella: ". $mediavoti ."</p>";
            }
        ?>
    </ul>
</body>
</html>