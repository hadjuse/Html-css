<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
<?php
    function toto($L, $C)
    {
        $L = floor($L/2) * 2;
        $C = floor($C / 2) * 2;
        for ($i = 0; $i < $C; $i++)
        {
            echo "X";
        }
        echo "\n";
        for($i = 0; $i < $L ; $i++)
        {
            if ($i % 2 == 0)
            {
                echo "X";
                for ($j = 1; $j < $C - 1; $j++)
                {
                    echo " ";
                }
                echo "X\n";
            }
            else
            {
                echo "X";
                for ($j = 1; $j < $C - 1; $j++)
                {
                    echo "X";
                }
                echo "X\n";
            }
        }
        for ($i = 0; $i < $C; $i++)
        {
            echo " ";
        }
        echo "\n";
    }
    toto(7,14);
    ?>
    
    <?php
        function min_maj($str1)
        {
            $result = "";
            for ($i = 0; $i < strlen($str1); $i++)
            {
                $char = $str1[$i];
                if (ctype_upper($char))
                {
                    $result .=strtolower($char);
                }
                else if (ctype_lower($char))
                {
                    $result .=strtoupper($char);
                }
                else
                {
                    $result .= $char;
                }
            }
            return $result;
        }
        echo min_maj("wELCome mUssAB ZneIKA");
    ?>
    
    <?php
        function m_p_long($str1)
        {
            $mots = preg_split('/\s+/', $str1);
            $longueur = 0;
            $position = 0;
            foreach ($mots as $key => $mot)
            {
                if (strlen($mot) > $longueur)
                {
                    $longueur = strlen($mot);
                    $position = $key;
                }
            }
            return "Le mot le plus long est '".$mots[$position]."' et sa position est ".$position;
        }
        echo m_p_long("Mon premier cours commence aujourd'hui");
    ?> 
</body>
</html>
