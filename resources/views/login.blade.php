<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
    <link href="dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{asset('img/logo.png')}}" type="gambar/tipe ikon">
</head>
<body>
    <!-- login start -->
    <section id="login" class="pt-36 pb-32 bg-[#dfd5ef]">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-3xl mb-4 sm:text-4xl lg:text-5xl">Welcome to Troublemaker</h2>
                    <p class="font-medium text-md md:text-lg">Silahkan masukkan email dan password yang telah terdaftar.</p>
                </div>
            </div>

            <form method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="password" class="text-base font-bold">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                        <a href="#" class="text-base font-medium text-[#4c1d95]">Lupa Password?</a>
                    </div>
                    <div class="w-full px-4">
                        <button class="text-base font-semibold text-white bg-[#4c1d95] py-3 px-8 rounded-full hover:opacity-80 hover:shadow-lg transition duration-500 w-full" type="submit">LOGIN</button>
                        <p class="text-base font-medium">Belum memiliki akun? <a href="/register" class="text-base font-medium text-[#4c1d95]">Daftar.</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- login end -->
</body>
</html>
