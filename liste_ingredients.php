<?php
require "header.php";
require "pdo.php";

try {
    // Connexion à la BD
    $pdo = getPDO();
    $sql = "SELECT * FROM ingredients WHERE nom NOT IN ('petite', 'moyenne', 'grande') ORDER BY nom";
    // Exécution de la requête
    $query = $pdo->query($sql);
    $ingredientList = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $err) {
    echo $err->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Ingrédients</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
</head>
<body class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="text-center">Liste des Ingrédients</h1>
            <div class="text-right mt-3 mb-3">

            </div>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Nom de l'ingrédient</th>
                    <th>Prix (en €)</th>
                </tr>
                <?php foreach ($ingredientList as $ingredient):?>
                    <tr>
                        <td> <?=$ingredient["nom"]?></td>
                        <td> <?=$ingredient["prix"]?></td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>

</body>
</html>