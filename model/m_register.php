<?php 
session_start();

require '../include/function.php';
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime();

if (isset($_POST['register'])) {
    $username   = strtolower(trim($_POST['username']));
    $email      = trim($_POST['email']);
    $password   = $_POST['password'];
    $password2  = $_POST['password2'];
    $date       = date('Y-m-d');

    // var_dump($date);
    // exit;

    // Cek password sama
    if ($password !== $password2) {
        
                
                $_SESSION['error'] = 'Password tidak cocok!';
                header('Location: ../register.php');
              
        exit;
    }

    // Cek apakah email sudah terdaftar
    
    $cek_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($cek_email) > 0) {

        $_SESSION['error'] = 'Email sudah terdaftar!';
                header('Location: ../register.php');
              
        exit;
    }

    $cek_usn = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_usn) > 0) {
        $_SESSION['error'] = 'Email sudah terdaftar!';
                header('Location: ../register.php');
              
        exit;
    }

    // Enkripsi password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $query = "INSERT INTO user (date, username, email, password, status, user_level) VALUES ('$date', '$username', '$email', '$password_hash', '1', '0')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['success'] = 'Registrasi berhasil!';
                header('Location: ../login.php');
              
        exit;
    } else {
       
                $_SESSION['error'] = 'Terjadi kesalahan saat registrasi!';
                header('Location: ../register.php');
              
        exit;
    }
} else {
    header('Location: ../login.php');
    exit;
}

