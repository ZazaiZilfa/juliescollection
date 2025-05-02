<?php 
session_start();

require 'include/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <title>Register | Julies Collection</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eaeaea] min-h-screen flex items-center justify-center overflow-hidden">

<div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
  <h2 class="text-2xl font-bold mb-6 text-center" style="color: #e6a4b4;">Register!</h2>

  

  <form id="formregister" action="model/m_register.php" method="POST">
    
    <input type="hidden" id="register" name="register">
    <div class="mb-4">
      <label for="username" class="block text-sm font-semibold mb-1 text-[#e6a4b4]">Username</label>
      <input type="text" required id="username" name="username" placeholder="Enter your username" 
        class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
    </div>

    <div class="mb-4">
      <label for="email" class="block text-sm font-semibold mb-1 text-[#e6a4b4]">Email Address</label>
      <input type="email" required id="email" name="email" placeholder="Enter your email" 
        class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
    </div>

    <div class="mb-4">
      <label for="password" class="block text-sm font-semibold mb-1 text-[#e6a4b4]">Password</label>
      <input type="password" required id="password" name="password" placeholder="Enter your password" 
        class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
    </div>

    <div class="mb-2">
      <label for="password2" class="block text-sm font-semibold mb-1 text-[#e6a4b4]">Confirm Password</label>
      <input type="password" required id="password2" name="password2" placeholder="Repeat your password" 
        class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
    </div>

   <?php 
   if (isset($_SESSION['error'])) {
    echo '<p id="error-msg" class="relative bg-pink-100 border border-pink-300 text-pink-700 text-sm px-4 py-3 rounded mb-4">
            <span class="font-semibold">Oops!</span> ' . $_SESSION['error'] . '
            <button onclick="this.parentElement.classList.add(\'hidden\')" class="absolute top-2 right-3 text-pink-700 hover:text-pink-900 font-bold text-lg leading-none">&times;</button>
          </p>';
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
    echo '<p class="relative bg-green-100 border border-green-300 text-green-700 text-sm px-4 py-3 rounded mb-4">
            <span class="font-semibold">Success!</span> ' . $_SESSION['success'] . '
            <button onclick="this.parentElement.classList.add(\'hidden\')" class="absolute top-2 right-3 text-green-700 hover:text-green-900 font-bold text-lg leading-none">&times;</button>
          </p>';
    unset($_SESSION['success']);
}
?>


    <p id="error-msg" class="relative bg-pink-100 border border-pink-300 text-pink-700 text-sm px-4 py-3 rounded mb-4 hidden">
  <span class="font-semibold">Oops!</span> Passwords do not match!
  <button onclick="document.getElementById('error-msg').classList.add('hidden');"
    class="absolute top-2 right-3 text-pink-700 hover:text-pink-900 font-bold text-lg leading-none">
    &times;
  </button>
</p>

    <button type="submit" id="tombol-simpan" class="w-full py-3 mt-3 rounded text-white font-semibold transition-all duration-200"
      style="background-color: #e6a4b4;"
      onmouseover="this.style.backgroundColor='#d88c9b';"
      onmouseout="this.style.backgroundColor='#e6a4b4';"
      onmousedown="this.style.backgroundColor='#c77c8a';"
      onmouseup="this.style.backgroundColor='#d88c9b';">
      Register
    </button>
  </form>


  <p class="text-center text-sm mt-6">
    Already Have Account? <a href="Login.php" style="color: #e6a4b4;">Sign Up</a>
  </p>
</div>

</body>

</html>

<script>

const form = document.getElementById("formregister");
  const password = document.getElementById("password");
  const password2 = document.getElementById("password2");
  const errorMsg = document.getElementById("error-msg");

  form.addEventListener("submit", function(e) {

    if (password.value !== password2.value) {
      e.preventDefault(); // Prevent form submission
      showErrorMessage();
      // errorMsg.classList.remove("hidden"); // Show error message
    } else {
      errorMsg.classList.add("hidden"); // Hide error message if matched
    }
  });

  function showErrorMessage() {
    const msg = document.getElementById("error-msg");
    msg.classList.remove("hidden");
    msg.style.opacity = "1";

    setTimeout(() => {
      msg.style.opacity = "0";
      setTimeout(() => msg.classList.add("hidden"), 500); // Setelah animasi selesai
    }, 3000);
  }

//   $(document).ready(function() {

        
       
//     ("#formregister").on("#tombol-simpan", function (e) {
//     e.preventDefault();
//     var dataform = $('#formregister')[0];
//     var data = new FormData(dataform);
//     console.log(data);
//     exit;

//     //var input_foto = $('#input_foto').val();
//     var email = $('#email').val();
//     var password = $('#password').val();

//     if (email == "") {
//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Email belum diisi !'
//         })
//     } else if (password == "") {
//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Password belum diisi !'
//         })
//     } else {
//         console.log("test");
//         $.ajax({
//             url: 'models/login.php',
//             type: 'post',
//             data: data,
//             enctype: 'multipart/form-data',
//             processData: false,
//             contentType: false,
//             cache: false,
//             success: function(hasil) {
//                 //sukses
//                 if (hasil == 1) {
//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Gagal...',
//                         text: 'Email Belum terdaftar'
//                     });

//                 } else if (hasil == 2) {
//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Gagal...',
//                         text: 'Password Salah'
//                     });
//                 } else if (hasil == 3) {
//                     // console.log(hasil);
//                     Swal.fire({
//                             position: "top-end",
//                             type: "success",
//                             title: "Login Berhasil",
//                             showConfirmButton: !1,
//                             timer: 1000
//                         })
//                         .then(function() {
//                             // location.reload('');
                            
//                             <?=isset($_GET['redirect']) ? "setTimeout(window.location.href = '".$_GET['redirect']."' , 800);" : "setTimeout(location.reload.bind(location), 800);"; 
//                             ?>
//                             // document.location.href = 'administrator';
//                         });
//                 } else if (hasil == 4) {
//                     Swal.fire({
//                         icon: 'error',
//                         title: 'Gagal...',
//                         text: 'Akun anda tidak terdaftar pada Outlet ini'
//                     });
//                 }
//             }
//         });
//     }
// })
// });
</script>