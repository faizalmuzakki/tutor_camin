<?php

include 'connection.php';

if($_POST['register']){
	$nama	= $_POST['nama'];
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
	$pass2	= $_POST['password2'];
 
	if($nama && $user && $pass && $pass2){
		if(true){
			if($pass == $pass2){
				$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
                $stmt->bind_param("s", $user);
                $stmt->execute();
                $result = $stmt->get_result();
                $num = $result->num_rows;
				if($num == 0){
                    $hash_password = hash('sha256',$pass);
                    // echo $hash_password;
                    $stmt = $conn->prepare("INSERT INTO users(nama,username,password) VALUES (?,?,?)");
                    $stmt->bind_param("sss", $nama, $user, $hash_password);
 
					if($stmt->execute()){
                        echo '<p><b>Selamat... Anda berhasil Register!</b></p>';
                        
					} else {
						// die("Connection error: ".$conn->error);
						echo '<p>Gagal melakukan Register, coba lagi!</p>';
					}
				} else {
					echo '<p>Username sudah terdaftar, pilih Username lain!</p>';
				}
			} else {
				echo '<p>Ulangi Password yang sama!</p>';
			}
		} else {
			echo '<p>Format Email tidak valid!</p>';
		}
	} else {
		echo '<p>Semua wajib Anda isi!</p>';
    }
    echo '<p>Kembali ke halaman <a href="index.php">login</a> </p>';
} else {
    header("Location: register.php");
}
?>