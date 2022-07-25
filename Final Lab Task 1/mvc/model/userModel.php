<?php
    require_once "db.php";

    function login($username, $userEmail,$userPassword){
        $conn = getConnection();
		$sql = "select * from user where name='{$username} 'and email='{$userEmail}' and password='{$userPassword}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }
?>