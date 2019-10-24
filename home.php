<?php

include 'connection.php';

// PROSES LOGIN
if($_POST['login']){
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
 
	if($user && $pass){
        $pass = hash('sha256',$pass);
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = (?) LIMIT 1");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
		if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            $db_pass = $data['password'];
			if($pass == $db_pass){
				echo '<p><b>Anda berhasil Login!</b></p>';
				
			}else{
				echo '<p>Username dan Password tidak cocok!</p>';
			}
		}else{
			echo '<p>Username tidak ada dalam Database!</p>';
		}
	}else{
		echo '<p>Username dan Password masih kosong!</p>';
	}
} else {
    header("Location: index.php");
}
?>