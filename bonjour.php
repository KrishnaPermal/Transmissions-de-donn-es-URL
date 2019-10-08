<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL</title>
</head>
<body>
    <p>
        <?php 
        if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
        {   
            $nbRepetitions = (int) $_GET['repeter'];

            if ($nbRepetitions < 100)
            {
                for ($repetition = 0 ; $repetition < $nbRepetitions ; $repetition++)
                {
                    echo '<p>Bonjour' . $_GET['nom'] .' '. $_GET['prenom'] . '</p>';
                }    
            }
            
        }
        else
        {
            echo 'Pas de nom ou de prénom défini !';
        }
        ?>
    </p>

</body>
</html>







