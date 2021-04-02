<?php
require "pdo.php";
require "header.php";
$isPosted = filter_has_var(INPUT_POST, "nom");
$isValid = true;

// On crée une liste des ingredients   
$listeIngredients = array();
$i = 0;

// --------------------------- TRAITEMENT DES CHECKBOX --------------------------- //
// On récupère les ingédients cochés en bas de la page
// Pour remplir la liste des ingredients $listeIngredients avec les valeurs reçues par $_POST
if (isset($_POST['envoie'])) {
    if (isset($_POST['ing01'])) {
        echo $_POST['ing01'] . '<br />';
        $listeIngredients[$i] = $_POST['ing01'];
        $i++;
    }
    if (isset($_POST['ing02'])) {
        echo $_POST['ing02'] . '<br />';
        $listeIngredients[$i] = $_POST['ing02'];
        $i++;
    }
    if (isset($_POST['ing03'])) {
        echo $_POST['ing03'] . '<br />';
        $listeIngredients[$i] = $_POST['ing03'];
        $i++;
    }
    if (isset($_POST['ing04'])) {
        echo $_POST['ing04'] . '<br />';
        $listeIngredients[$i] = $_POST['ing04'];
        $i++;
    }
    if (isset($_POST['ing05'])) {
        echo $_POST['ing05'] . '<br />';
        $listeIngredients[$i] = $_POST['ing05'];
        $i++;
    }
    if (isset($_POST['ing06'])) {
        echo $_POST['ing06'] . '<br />';
        $listeIngredients[$i] = $_POST['ing06'];
        $i++;
    }
    if (isset($_POST['ing07'])) {
        echo $_POST['ing07'] . '<br />';
        $listeIngredients[$i] = $_POST['ing07'];
        $i++;
    }
    if (isset($_POST['ing08'])) {
        echo $_POST['ing08'] . '<br />';
        $listeIngredients[$i] = $_POST['ing08'];
        $i++;
    }
    if (isset($_POST['ing09'])) {
        echo $_POST['ing09'] . '<br />';
        $listeIngredients[$i] = $_POST['ing09'];
        $i++;
    }
    if (isset($_POST['ing10'])) {
        echo $_POST['ing10'] . '<br />';
        $listeIngredients[$i] = $_POST['ing10'];
        $i++;
    }
    if (isset($_POST['ing11'])) {
        echo $_POST['ing11'] . '<br />';
        $listeIngredients[$i] = $_POST['ing11'];
        $i++;
    }
    if (isset($_POST['ing12'])) {
        echo $_POST['ing12'] . '<br />';
        $listeIngredients[$i] = $_POST['ing12'];
        $i++;
    }
    if (isset($_POST['ing13'])) {
        echo $_POST['ing13'] . '<br />';
        $listeIngredients[$i] = $_POST['ing13'];
        $i++;
    }
    if (isset($_POST['ing14'])) {
        echo $_POST['ing14'] . '<br />';
        $listeIngredients[$i] = $_POST['ing14'];
        $i++;
    }
    if (isset($_POST['ing15'])) {
        echo $_POST['ing15'] . '<br />';
        $listeIngredients[$i] = $_POST['ing15'];
        $i++;
    }
    if (isset($_POST['ing16'])) {
        echo $_POST['ing16'] . '<br />';
        $listeIngredients[$i] = $_POST['ing16'];
        $i++;
    }
    if (isset($_POST['ing17'])) {
        echo $_POST['ing17'] . '<br />';
        $listeIngredients[$i] = $_POST['ing17'];
        $i++;
    }
    if (isset($_POST['ing18'])) {
        echo $_POST['ing18'] . '<br />';
        $listeIngredients[$i] = $_POST['ing18'];
        $i++;
    }
    if (isset($_POST['ing19'])) {
        echo $_POST['ing19'] . '<br />';
        $listeIngredients[$i] = $_POST['ing19'];
        $i++;
    }
    if (isset($_POST['ing20'])) {
        echo $_POST['ing20'] . '<br />';
        $listeIngredients[$i] = $_POST['ing20'];
        $i++;
    }
    if (isset($_POST['ing21'])) {
        echo $_POST['ing21'] . '<br />';
        $listeIngredients[$i] = $_POST['ing21'];
        $i++;
    }
    if (isset($_POST['ing22'])) {
        echo $_POST['ing22'] . '<br />';
        $listeIngredients[$i] = $_POST['ing22'];
        $i++;
    }
    if (isset($_POST['ing23'])) {
        echo $_POST['ing23'] . '<br />';
        $listeIngredients[$i] = $_POST['ing23'];
        $i++;
    }
    if (isset($_POST['ing24'])) {
        echo $_POST['ing24'] . '<br />';
        $listeIngredients[$i] = $_POST['ing24'];
        $i++;
    }
}


if ($isPosted) {
    // Règles de récupération
    $inputFilters = [
        "nom" => FILTER_SANITIZE_STRING,
        "taille" => FILTER_SANITIZE_STRING,
        "base" => FILTER_SANITIZE_STRING,
        "ingredient_01" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_02" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_03" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_04" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_05" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_06" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_07" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_08" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_09" => FILTER_SANITIZE_NUMBER_INT,
        "ingredient_10" => FILTER_SANITIZE_NUMBER_INT,
        "prix" => FILTER_SANITIZE_NUMBER_FLOAT,
        "vegetarien" => FILTER_SANITIZE_STRING,
    ];
    // Récupération de toutes les données dans un tableau
    $data = filter_input_array(INPUT_POST, $inputFilters);

    // Récupération des ingredients à partir du tableau $listeIngredients pour remplir le tableau $data
    if (isset($listeIngredients[0])) {
        $data["ingredient_01"] = $listeIngredients[0];
    } else {
        $data["ingredient_01"] = null;
    }

    if (isset($listeIngredients[1])) {
        $data["ingredient_02"] = $listeIngredients[1];
    } else {
        $data["ingredient_02"] = null;
    }

    if (isset($listeIngredients[2])) {
        $data["ingredient_03"] = $listeIngredients[2];
    } else {
        $data["ingredient_03"] = null;
    }

    if (isset($listeIngredients[3])) {
        $data["ingredient_04"] = $listeIngredients[3];
    } else {
        $data["ingredient_04"] = null;
    }

    if (isset($listeIngredients[4])) {
        $data["ingredient_05"] = $listeIngredients[4];
    } else {
        $data["ingredient_05"] = null;
    }

    if (isset($listeIngredients[5])) {
        $data["ingredient_06"] = $listeIngredients[5];
    } else {
        $data["ingredient_06"] = null;
    }

    if (isset($listeIngredients[6])) {
        $data["ingredient_07"] = $listeIngredients[6];
    } else {
        $data["ingredient_07"] = null;
    }

    if (isset($listeIngredients[7])) {
        $data["ingredient_08"] = $listeIngredients[7];
    } else {
        $data["ingredient_08"] = null;
    }

    if (isset($listeIngredients[8])) {
        $data["ingredient_09"] = $listeIngredients[8];
    } else {
        $data["ingredient_09"] = null;
    }

    if (isset($listeIngredients[9])) {
        $data["ingredient_10"] = $listeIngredients[9];
    } else {
        $data["ingredient_10"] = null;
    }

    // Validation de la saisie
    $isValid = $data["nom"]
        && !empty($data["taille"])
        && !empty($data["base"])
        && !empty($data["ingredient_01"]);

    // -------------------- CALCUL DU PRIX -------------------- //
    if ($isValid) {
        try {
            // Connexion à la BD
            $pdo1 = getPDO();

            // Récupération de la taille de la pizza pour l'affecter à $taille
            // $taille sera utilisée dans la requête préparée sqlSelect
            $taille = $data["taille"];

            // Récupération du nom du premier ingredient obligatoire pour l'affecter à $ingredient_01
            // $ingredient_01 sera utilisée dans la requête préparée sqlSelect
            $ingredient_01 = $data["ingredient_01"];

            // Récupération du nom du deuxième ingredient facultatif pour l'affecter à $ingredient_02
            // Si $data["ingredient_02"] est renseignée
            // Alors $ingredient_02 prendra la valeur de $data["ingredient_02"]
            // Sinon la valeur de $ingredient_02 sera 'null'
            // $ingredient_02 sera utilisée dans la requête préparée sqlSelect
            if (isset($data["ingredient_02"])) {
                $ingredient_02 = $data["ingredient_02"];
            } else {
                $ingredient_02 = 'null';
            }

            if (isset($data["ingredient_03"])) {
                $ingredient_03 = $data["ingredient_03"];
            } else {
                $ingredient_03 = 'null';
            }

            if (isset($data["ingredient_04"])) {
                $ingredient_04 = $data["ingredient_04"];
            } else {
                $ingredient_04 = 'null';
            }

            if (isset($data["ingredient_05"])) {
                $ingredient_05 = $data["ingredient_05"];
            } else {
                $ingredient_05 = 'null';
            }

            if (isset($data["ingredient_06"])) {
                $ingredient_06 = $data["ingredient_06"];
            } else {
                $ingredient_06 = 'null';
            }

            if (isset($data["ingredient_07"])) {
                $ingredient_07 = $data["ingredient_07"];
            } else {
                $ingredient_07 = 'null';
            }

            if (isset($data["ingredient_08"])) {
                $ingredient_08 = $data["ingredient_08"];
            } else {
                $ingredient_08 = 'null';
            }

            if (isset($data["ingredient_09"])) {
                $ingredient_09 = $data["ingredient_09"];
            } else {
                $ingredient_09 = 'null';
            }

            if (isset($data["ingredient_10"])) {
                $ingredient_10 = $data["ingredient_10"];
            } else {
                $ingredient_10 = 'null';
            }

            // La requête préparée SELECT pour obtenir le PRIX
            $sqlSelect = "SELECT sum(prix) AS prix FROM ingredients WHERE nom IN (:taille, :ingredient_01, :ingredient_02, :ingredient_03, :ingredient_04, :ingredient_05, :ingredient_06, :ingredient_07, :ingredient_08, :ingredient_09, :ingredient_10)";
            
            $statementSelect = $pdo1->prepare($sqlSelect);

            $statementSelect->bindValue(':taille', $taille);
            $statementSelect->bindValue(':ingredient_01', $ingredient_01);
            $statementSelect->bindValue(':ingredient_02', $ingredient_02);
            $statementSelect->bindValue(':ingredient_03', $ingredient_03);
            $statementSelect->bindValue(':ingredient_04', $ingredient_04);
            $statementSelect->bindValue(':ingredient_05', $ingredient_05);
            $statementSelect->bindValue(':ingredient_06', $ingredient_06);
            $statementSelect->bindValue(':ingredient_07', $ingredient_07);
            $statementSelect->bindValue(':ingredient_08', $ingredient_08);
            $statementSelect->bindValue(':ingredient_09', $ingredient_09);
            $statementSelect->bindValue(':ingredient_10', $ingredient_10);

            $statementSelect -> execute();

            // On déclare un tableau $resultatsListe qui prendra les valeurs des prix 
            $resultatsListe = array();
            // On affecte les prix obtenus par la requête préparée dans le tableau $resultatsListe 
            $resultatsListe = $statementSelect->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }
    // ---------- TRAITEMENT DU TABLEAU $resultatsListe ---------- //
    // On récupère le prix de la pizza pour l'affecter à $data["prix"]
    // $data["prix"] sera utilisé dans la requête INSERT pour créer une occurrence de pizza  
    foreach ($resultatsListe as $resultat):
        $data["prix"] = round($resultat["prix"], 2);
    endforeach;
    // -------------------- FIN CALCUL DU PRIX -------------------- //

// -------------------- RECUPERATION DES DONNEES VIANDE (OUI/NON) -------------------- //
if ($isValid) {
    try {
        echo '<pre> $data au début de try <br>';
        print_r($data);
        echo '</pre>';
        // Connexion à la BD
        $pdo2 = getPDO();

        // Récupération du nom du premier ingredient obligatoire pour l'affecter à $ingredient_01
        // $ingredient_01 sera utilisée dans la requête préparée sqlSelect
        $ingredient_01 = $data["ingredient_01"];

        // Récupération du nom du deuxième ingredient facultatif pour l'affecter à $ingredient_02
        // Si $data["ingredient_02"] est renseignée
        // Alors $ingredient_02 prendra la valeur de $data["ingredient_02"]
        // Sinon la valeur de $ingredient_02 sera 'null'
        // $ingredient_02 sera utilisée dans la requête préparée sqlSelect
        if (isset($data["ingredient_02"])) {
            $ingredient_02 = $data["ingredient_02"];
        } else {
            $ingredient_02 = 'null';
        }

        if (isset($data["ingredient_03"])) {
            $ingredient_03 = $data["ingredient_03"];
        } else {
            $ingredient_03 = 'null';
        }

        if (isset($data["ingredient_04"])) {
            $ingredient_04 = $data["ingredient_04"];
        } else {
            $ingredient_04 = 'null';
        }

        if (isset($data["ingredient_05"])) {
            $ingredient_05 = $data["ingredient_05"];
        } else {
            $ingredient_05 = 'null';
        }

        if (isset($data["ingredient_06"])) {
            $ingredient_06 = $data["ingredient_06"];
        } else {
            $ingredient_06 = 'null';
        }

        if (isset($data["ingredient_07"])) {
            $ingredient_07 = $data["ingredient_07"];
        } else {
            $ingredient_07 = 'null';
        }

        if (isset($data["ingredient_08"])) {
            $ingredient_08 = $data["ingredient_08"];
        } else {
            $ingredient_08 = 'null';
        }

        if (isset($data["ingredient_09"])) {
            $ingredient_09 = $data["ingredient_09"];
        } else {
            $ingredient_09 = 'null';
        }

        if (isset($data["ingredient_10"])) {
            $ingredient_10 = $data["ingredient_10"];
        } else {
            $ingredient_10 = 'null';
        }
        // ------------------------------------ECHO
        echo '<pre> $ingredient_01 <br>';
        print_r($ingredient_01);
        echo '</pre>';
        echo '<pre> $ingredient_02 <br>';
        print_r($ingredient_02);
        echo '</pre>';
        echo '<pre> $ingredient_03 <br>';
        print_r($ingredient_03);
        echo '</pre>';
        echo '<pre> $ingredient_04 <br>';
        print_r($ingredient_04);
        echo '</pre>';
        echo '<pre> $ingredient_05 <br>';
        print_r($ingredient_05);
        echo '</pre>';
        echo '<pre> $ingredient_06 <br>';
        print_r($ingredient_06);
        echo '</pre>';
        echo '<pre> $ingredient_07 <br>';
        print_r($ingredient_07);
        echo '</pre>';
        echo '<pre> $ingredient_08 <br>';
        print_r($ingredient_08);
        echo '</pre>';
        echo '<pre> $ingredient_09 <br>';
        print_r($ingredient_09);
        echo '</pre>';
        echo '<pre> $ingredient_10 <br>';
        print_r($ingredient_10);
        echo '</pre>';


        // En parallèle, nous écrivons une requête pour sélectionner si un ingredient contient de la viande ou pas 
        $sqlSelectViande = "SELECT viande FROM ingredients WHERE nom IN (:ingredient_01, :ingredient_02, :ingredient_03, :ingredient_04, :ingredient_05, :ingredient_06, :ingredient_07, :ingredient_08, :ingredient_09, :ingredient_10)";
        
        $statementSelectViande = $pdo2->prepare($sqlSelectViande);

        $statementSelectViande->bindValue(':ingredient_01', $ingredient_01);
        $statementSelectViande->bindValue(':ingredient_02', $ingredient_02);
        $statementSelectViande->bindValue(':ingredient_03', $ingredient_03);
        $statementSelectViande->bindValue(':ingredient_04', $ingredient_04);
        $statementSelectViande->bindValue(':ingredient_05', $ingredient_05);
        $statementSelectViande->bindValue(':ingredient_06', $ingredient_06);
        $statementSelectViande->bindValue(':ingredient_07', $ingredient_07);
        $statementSelectViande->bindValue(':ingredient_08', $ingredient_08);
        $statementSelectViande->bindValue(':ingredient_09', $ingredient_09);
        $statementSelectViande->bindValue(':ingredient_10', $ingredient_10);

        $statementSelectViande -> execute();

        echo '<pre> $statementSelectViande <br>';
        print_r($statementSelectViande);
        echo '</pre>';

        // On déclare un tableau $resultatsListeViande qui prendra les valeurs 0 (pas de viande) ou 1 (avec viande)   )
        $resultatsListeViande = array();
        // On affecte les prix obtenus par la requête préparée dans le tableau $resultatsListe 
        $resultatsListeViande = $statementSelectViande->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre> $resultatsListeViande <br>';
        print_r($resultatsListeViande);
        echo '</pre>';
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
// ---------- TRAITEMENT DU TABLEAU $resultatsListeViande ---------- //
/* foreach ($resultatsListeViande as $resultatViande):
    if ($resultatViande["viande"] = 0){
        $data["vegetarien"] = 'oui';
    } else {
        $data["vegetarien"] = 'non';
    }
endforeach; */

for ($i = 0; $i < count($resultatsListeViande); $i++){
    if ($resultatsListeViande[$i]["viande"] === "0"){
        $data["vegetarien"] = 'oui';
        echo '<pre> $resultatsListeViande IF <br>';
        print_r($resultatsListeViande[$i]);
        print_r($resultatsListeViande[$i]["viande"]);
        echo '</pre>';
    } else {
        $data["vegetarien"] = 'non';
        echo '<pre> $resultatsListeViande ELSE <br>';
        print_r($resultatsListeViande[$i]);
        print_r($resultatsListeViande[$i]["viande"]);
        var_dump($resultatsListeViande[$i]["viande"]);
        echo '</pre>';
        break;
    }
}
// echo '<pre> $data <br>';
// print_r($data);
// echo '</pre>';
// -------------------- FIN RECUPERATION DES DONNEES VIANDE (OUI/NON) -------------------- //


    if ($isValid) {
        try {
            // La requête SQL
            $sqlInsert = "INSERT INTO pizzas (nom, taille, base, ingredient_01, ingredient_02, ingredient_03, ingredient_04, ingredient_05, ingredient_06, ingredient_07, ingredient_08, ingredient_09, ingredient_10, prix, vegetarien)
                    VALUES (:nom, :taille, :base, :ingredient_01, :ingredient_02, :ingredient_03, :ingredient_04, :ingredient_05, :ingredient_06, :ingredient_07, :ingredient_08, :ingredient_09, :ingredient_10, :prix, :vegetarien)";
            // La connexion à la BD
            $pdo3 = getPDO();
            // Préparation de la requête
            $statementInsert = $pdo3->prepare($sqlInsert);
            // Exécution de la requête préparée avec $data (données du tableau qui récupère les données du formulaire)
            $statementInsert->execute($data);

            // Récupération de l'id de la pizza ajouté
            $pizzaId = $pdo3->lastInsertId();

            // Redirection vers la liste des pizzas
            header("location:liste_pizza.php");
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle pizza</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <!-- A faire : Un script JS pour obliger l'utilisateur à sélectionner entre 1 et 10 ingrédients. -->
    <!-- <script type="text/javascript" src="insert_pizza.js"></script> -->
</head>

<body class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Création de pizza</h1>

            <!-------- FORMULAIRE DE CREATION DE LA PIZZA -------->
            <form method="post" enctype="multipart/form-data">

                <!-------- NOM DE LA PIZZA -------->
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>

                <!-------- TAILLE DE LA PIZZA -------->
                <div class="form-group">
                    <label>Taille de la pizza</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="taille" id="flexRadioDefault1" value="petite" checked />
                        <label class="form-check-label" for="taille">Petite</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="taille" id="flexRadioDefault1" value="moyenne" />
                        <label class="form-check-label" for="taille">Moyenne</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="taille" id="flexRadioDefault1" value="grande" />
                        <label class="form-check-label" for="taille">Grande</label>
                    </div>
                </div>

                <!-------- BASE DE LA PIZZA -------->
                <div class="form-group">
                    <label>Base de la pizza</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="base" id="flexRadioDefault1" value="tomate" checked />
                        <label class="form-check-label" for="base">Base Tomate</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="base" id="flexRadioDefault1" value="crème fraiche" />
                        <label class="form-check-label" for="base">Base Crème Fraiche</label>
                    </div>
                </div>

                <!-------- INGREDIENTS DE LA PIZZA -------->
                <div class="form-group">
                    <label>Ingrédients (sélectionnez entre 1 et 10 ingrédients) :</label>
                    <br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing01" id="flexCheckDefault" value="anchois" />
                        <label class="form-check-label" for="ing01">Anchois </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing02" id="flexCheckDefault" value="champignon" />
                        <label class="form-check-label" for="ing02">Champignons </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing03" id="flexCheckDefault" value="chèvre" />
                        <label class="form-check-label" for="ing02">Chèvre </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing04" id="flexCheckDefault" value="chorizo" />
                        <label class="form-check-label" for="ing02">Chorizo </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing05" id="flexCheckDefault" value="crevettes" />
                        <label class="form-check-label" for="ing05">Crevettes </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing06" id="flexCheckDefault" value="fromage" />
                        <label class="form-check-label" for="ing06">Fromage </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing07" id="flexCheckDefault" value="gorgonzola" />
                        <label class="form-check-label" for="ing07">Gorgonzola </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing08" id="flexCheckDefault" value="jambon" />
                        <label class="form-check-label" for="ing08">Jambon </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing09" id="flexCheckDefault" value="jambon de pays" />
                        <label class="form-check-label" for="ing09">Jambon de pays </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing10" id="flexCheckDefault" value="lardons" />
                        <label class="form-check-label" for="ing10">Lardons </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing11" id="flexCheckDefault" value="merguez" />
                        <label class="form-check-label" for="ing11">Merguez </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing12" id="flexCheckDefault" value="miel" />
                        <label class="form-check-label" for="ing12">Miel </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing13" id="flexCheckDefault" value="oeuf" />
                        <label class="form-check-label" for="ing13">Oeuf </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing14" id="flexCheckDefault" value="oignons" />
                        <label class="form-check-label" for="ing14">Oignons </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing15" id="flexCheckDefault" value="olive" />
                        <label class="form-check-label" for="ing15">Olive </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing16" id="flexCheckDefault" value="parmesan" />
                        <label class="form-check-label" for="ing16">Parmesan </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing17" id="flexCheckDefault" value="poivron" />
                        <label class="form-check-label" for="ing17">Poivron </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing18" id="flexCheckDefault" value="pomme de terre" />
                        <label class="form-check-label" for="ing18">Pomme de terre </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing19" id="flexCheckDefault" value="poulet" />
                        <label class="form-check-label" for="ing19">Poulet </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing20" id="flexCheckDefault" value="saumon" />
                        <label class="form-check-label" for="ing20">Saumon </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing21" id="flexCheckDefault" value="tomate confite" />
                        <label class="form-check-label" for="ing21">Tomate confite </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing22" id="flexCheckDefault" value="tomate fraîche" />
                        <label class="form-check-label" for="ing22">Tomate fraîche </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing23" id="flexCheckDefault" value="viande hachée" />
                        <label class="form-check-label" for="ing23">Viande hachée </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ing24" id="flexCheckDefault" value="viande kebab" />
                        <label class="form-check-label" for="ing24">Viande kebab </label>
                    </div>
                </div>

                <!-------- BOUTON VALIDER -------->
                <button type="submit" name="envoie" class="btn btn-success btn-lg btn-block" id="idSubmit">
                    Valider
                </button>

            </form>
        </div>
    </div>

</body>

</html>