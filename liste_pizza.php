<?php
require "header.php";
require "pdo.php";

try {
    // Connexion à la BD
    $pdo = getPDO();
    $sql = "SELECT * FROM pizzas";
    // Exécution de la requête
    $query = $pdo->query($sql);
    $pizzaList = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $err) {
    echo $err->getMessage();
}

// On déclare un tableau qui contiendra la liste des noms des ingrédients  
$listeIngredientsTableau = array();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pizzas</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
</head>
<body class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="text-center">Liste des Pizzas</h1>
            <div class="text-center mt-3 mb-3">
                <a href="insert_pizza.php" class="btn btn-primary">
                    Ajouter une pizza
                </a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Nom de la pizza</th>
                    <th>Taille</th>
                    <th>Base</th>
                    <th>Ingrédients</th>
                    <th>Prix</th>
                    <th>Vegetarien</th>
                </tr>

                <?php foreach ($pizzaList as $pizza):
                    $listeIngredientsString = '';
                    if (isset($pizza["ingredient_01"])) {
                        $listeIngredientsTableau[0] = $pizza["ingredient_01"];
                    } else {
                        $listeIngredientsTableau[0] = null;
                    }
                    if (isset($pizza["ingredient_02"])) {
                        $listeIngredientsTableau[1] = $pizza["ingredient_02"];
                    } else {
                        $listeIngredientsTableau[1] = null;
                    }
                    if (isset($pizza["ingredient_03"])) {
                        $listeIngredientsTableau[2] = $pizza["ingredient_03"];
                    } else {
                        $listeIngredientsTableau[2] = null;
                    }
                    if (isset($pizza["ingredient_04"])) {
                        $listeIngredientsTableau[3] = $pizza["ingredient_04"];
                    } else {
                        $listeIngredientsTableau[3] = null;
                    }
                    if (isset($pizza["ingredient_05"])) {
                        $listeIngredientsTableau[4] = $pizza["ingredient_05"];
                    } else {
                        $listeIngredientsTableau[4] = null;
                    }
                    if (isset($pizza["ingredient_06"])) {
                        $listeIngredientsTableau[5] = $pizza["ingredient_06"];
                    } else {
                        $listeIngredientsTableau[5] = null;
                    }
                    if (isset($pizza["ingredient_07"])) {
                        $listeIngredientsTableau[6] = $pizza["ingredient_07"];
                    } else {
                        $listeIngredientsTableau[6] = null;
                    }
                    if (isset($pizza["ingredient_08"])) {
                        $listeIngredientsTableau[7] = $pizza["ingredient_08"];
                    } else {
                        $listeIngredientsTableau[7] = null;
                    }
                    if (isset($pizza["ingredient_09"])) {
                        $listeIngredientsTableau[8] = $pizza["ingredient_09"];
                    } else {
                        $listeIngredientsTableau[8] = null;
                    }
                    if (isset($pizza["ingredient_10"])) {
                        $listeIngredientsTableau[9] = $pizza["ingredient_10"];
                    } else {
                        $listeIngredientsTableau[9] = null;
                    }
                    $listeIngredientsString = implode(" ", $listeIngredientsTableau);
                    ?>
                    <tr>
                        <td> <?=$pizza["nom"]?></td>
                        <td> <?=$pizza["taille"]?></td>
                        <td> <?=$pizza["base"]?></td>
                        <td> <?=$listeIngredientsString?></td>
                        <td> <?=$pizza["prix"]?></td>
                        <td> <?=$pizza["vegetarien"]?></td>
                        <td>
                            <a href="delete_pizza.php?id=<?=$pizza["id"]?>"
                            class="btn btn-danger">Supprimer </a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>

</body>
</html>