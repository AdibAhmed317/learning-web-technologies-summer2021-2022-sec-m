<?php
    session_start();
    
    $userId = $_POST['userId'];
    $password = $_POST['userPassword'];

    if($userId == null || $password == null){
		echo "null userId/password";
	}else{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
            // print($user);
            // print_r($user[3]);
			if($userId == trim($user[0]) && $password == trim($user[1])){                
					if ($user[3]=== 'Admin') {
						$_SESSION['status'] = true;
						setcookie('status', 'true', time()+3600, '/');
						header('location: Admin.html');   
					}
			}
		}
		echo "invalid user";
	}
?>