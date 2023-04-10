<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>
<body>
    <?php
        function affiche_mot()
        {
            $fichier = "test.txt";
            $ouverture = fopen($fichier, "r");
            if ($ouverture)
            {
                while(($ligne = fgets($ouverture)) !== false)
                {
                    $mots = preg_split(' /\s+/', $ligne);
                    foreach ($mots as $mot)
                    {
                        if (strlen($mot) < 4)
                        {
                            echo $mot." ";
                        }
                    }
                }
                fclose($ouverture);
            }
            else
            {
                echo "Erreur d'ouverture du fichier";
            }
        }
        affiche_mot();
    ?>    
</body>
</html>