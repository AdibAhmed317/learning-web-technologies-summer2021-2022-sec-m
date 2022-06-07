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
        $numberOfRow = 3;
        for ($i=$numberOfRow; $i>=1; --$i) { 
            for ($j=1; $j<=$i ; ++$i) { 
                echo ($j);
            }
            echo ("<br>");
        }
    }

    // function alphabetShape()
    // {

    // }

    starShape();
    numberShape();
?>