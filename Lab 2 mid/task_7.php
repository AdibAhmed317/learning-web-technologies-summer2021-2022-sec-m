<?php
    function starShape()
    {
        for ($i=0; $i<=3; $i++) { 
            for ($j=1; $j<=$i; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
    }

    function numberShape()
    {
        for ($i=3; $i>=0; &i--) { 
            for ($j=1; $j<=$i ; $j++) { 
                echo $j . " ";
            }
            echo ("<br>");
        }
    }

    function alphabetShape()
    {
        $VAL = chr(65);
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j <= $i ; $j++) { 
                echo $VAL;
                $VAL++;
            }
            echo "<br>";
        }
    }

    starShape();
    numberShape();
    alphabetShape();
?>