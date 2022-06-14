<?php
    session_start();
    $name = $_GET['name'];

    if($name == null){
        echo "Invalid Input.";

    }elseif{
        if(str_word_count($name) <= 2){
            echo "atleast put 2 words.";
        }elseif ($name[0]!=range('a','z') || $name[0]!=range('A','Z')) {
            echo "Must start with a letter";
        }elseif () {
            
        }
    }
?>