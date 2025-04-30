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
            Don't have an account? <a href="#" style="color: #e6a4b4;">Register</a>
        </p>
    </div>

</body>

</html>
