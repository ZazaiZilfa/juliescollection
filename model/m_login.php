<?php 
session_start();

require '../include/function.php';
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime();

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Cek apakah data kosong
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Email dan password wajib diisi!";
        header("Location: ../login.php");
        exit;
    }

    // Cari user berdasarkan email
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data ke session
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            
            $_SESSION['success'] = "Login berhasil!";
            header("Location: ../index.php"); // arahkan ke dashboard atau homepage
            exit;
        } else {
            $_SESSION['error'] = "Password salah!";
            header("Location: ../login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Email tidak ditemukan!";
        header("Location: ../login.php");
        exit;
    }
}






