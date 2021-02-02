<?php
session_start();

require 'connect.php';

$username = $_POST["username"];
$password = md5($_POST["password"]);
$result = mysqli_query($connect,"SELECT * FROM tb_login WHERE username = '$username' ");
$cek = mysqli_num_rows($result);


if($cek > 0){
 
    $data = mysqli_fetch_array($result);
    
    $_SESSION['id_login'] = $data['id_login'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['pasword'] = $data['password'];
    $_SESSION['nama_admin'] = $data['nama_admin'];
    $_SESSION['status_admin'] = $data['status_admin'];
	$_SESSION['picture'] = $data['picture'];


	if($password==$data['password']){
		
		if($data['status_admin']=="admin"){
		
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['status_admin'] = "admin";
				// alihkan ke halaman dashboard admin
				header("location:admin/index.php");
		
			// cek jika user login sebagai pegawai
			}else if($data['status_admin']=="user"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['status_admin'] = "user";
				// alihkan ke halaman dashboard pegawai
				header("location:user/index.php");
		
			// cek jika user login sebagai pengurus
			}else{
		
				// alihkan ke halaman login kembali
				header("location:index.php?pesan=gagal");
			}
	}else{echo "login gagal";}
 
	// cek jika user login sebagai admin
	
}else{
	echo " <script>
	window.alert('User Tidak Ditemukan');
	</script>";
	
	header("login.php");
	
}

// if( isset($_POST["login"])){
    
    
  



//     // CEK USERNAME
//     if(mysqli_num_rows($result)===0){
//         echo "
//             <script>
//             window.alert('User Tidak Ditemukan');
//             window.location = 'login.php'
//             </script>
//             ";
//     }
//     else if(mysqli_num_rows($result)===1){

//         //CEK PASSWORD
//         $row = mysqli_fetch_assoc($result);

//         $_SESSION['id_login'] = $row['id_login'];
//         $_SESSION['username'] = $row['username'];
//         $_SESSION['pasword'] = $row['pasword'];
//         $_SESSION['nama_admin'] = $row['nama_admin'];
//         $_SESSION['status_admin'] = $row['status_admin'];
//         $_SESSION['picture'] = $row['picture'];

//         if($password===$row["password"]){
//             //SET SESSION
//             $_SESSION["login"] = true;
//             header('location:admin/index.php');
//             exit;
           
//         }else{ echo "
//             <script>
//             window.alert('Username Atau Password Salah');
//             window.location = 'login.php'
//             </script>
//             ";}
        
//     }
// }
?>