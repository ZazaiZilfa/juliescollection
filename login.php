<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <title>Login | Julies Collection</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#eaeaea] min-h-screen flex items-center justify-center overflow-hidden">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center" style="color: #e6a4b4;">Login !</h2>
        <?php
session_start();
if (isset($_SESSION['error'])) {
    echo '<p class="relative bg-pink-100 border border-pink-300 text-pink-700 text-sm px-4 py-3 rounded mb-4">
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

        <form>
            <div class="mb-4">
                <input type="email" placeholder="Email Address" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
            </div>
            <div class="mb-2">
                <input type="password" placeholder="Password" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-[#e6a4b4]" />
            </div>
            <div class="text-right mb-6">
                <a href="#" class="text-sm" style="color: #e6a4b4;">Forgot Password?</a>
            </div>
            <button type="submit" class="w-full py-3 rounded text-white font-semibold transition-all duration-200"
                style="background-color: #e6a4b4;"
                onmouseover="this.style.backgroundColor='#d88c9b';"
                onmouseout="this.style.backgroundColor='#e6a4b4';"
                onmousedown="this.style.backgroundColor='#c77c8a';"
                onmouseup="this.style.backgroundColor='#d88c9b';">
                Login
            </button>
        </form>

        <p class="text-center text-sm mt-6">
            Don't have an account? <a href="register.php" style="color: #e6a4b4;">Register</a>
        </p>
    </div>

</body>

</html>
