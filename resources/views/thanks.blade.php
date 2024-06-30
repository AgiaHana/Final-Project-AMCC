<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>

<div class="flex justify-center items-center min-h-screen bg-gradient-to-r from-gray-200 to-gray-400">
    <div class="bg-white p-10 rounded-lg shadow-lg text-center max-w-lg mx-auto">
        <h1 class="text-4xl font-bold text-red-500 mb-4 animate__animated animate__fadeInDown">Thank You</h1>
        <h2 class="text-2xl text-blue-600 mb-6 animate__animated animate__fadeInUp">Your order has been recorded, please check your email</h2>
        
        <div class="flex justify-center space-x-4 mb-6">
            <a href="https://www.facebook.com" class="text-2xl text-red-500 hover:text-red-700"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" class="text-2xl text-red-500 hover:text-red-700"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com" class="text-2xl text-red-500 hover:text-red-700"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com" class="text-2xl text-red-500 hover:text-red-700"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 transition duration-300" onclick="goToHomePage()">Go to Home</button>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    function goToHomePage() {
        window.location.href = '/';
    }
</script>
</body>
</html>
