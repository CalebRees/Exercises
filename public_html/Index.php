<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercises</title>
</head>
<body>
    <div><p> 1 - Gasto Energético Basal</p>
    <form method="post" action="Index.php">
    <p>
    <label for="peso">Peso Corporal</label>
    <input type="text" id="peso">
    </p>
    <p>
    <label for="altura">Altura</label>
    <input type="text" id="altura">
    </p>
    <label for="idade">Idade</label>
    <input type="text" id="idade">
    <p><label for="homem">Homem</label><input type="radio" name="gender" id="homem" value="Homem"><label for="mulher">Mulher</label><input type="radio" name="gender" id="mulher" value="mulher"></p>
    <p><input type="submit" value="Calcular"></p>
    </form>
    <?php

    ?>
    
    </div>

</body>
</html>