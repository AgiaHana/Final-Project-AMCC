<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
    <link href="dist/output.css" rel="stylesheet">
</head>
<body>
    <!-- register start -->
    <section id="login" class="pt-36 pb-32 bg-[#dfd5ef]">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-3xl mb-4 sm:text-4xl lg:text-5xl">Daftar</h2>
                    <p class="font-medium text-md md:text-lg">Isikan sesuai dengan data yang diminta.</p>
                </div>
            </div>

            <form method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold">Nama</label>
                        <input type="text" id="name" name="name" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="alamat" class="text-base font-bold">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="password" class="text-base font-bold">Password</label>
                        <input type="password" id="password" name="password" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="password_confirmation" class="text-base font-bold">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-3 rounded-md focus:outline-none focus:ring-[#4c1d95] focus:ring-1 focus:border-[#4c1d95]">
                    </div>
                    <div class="w-full px-4">
                        <button class="text-base font-semibold text-white bg-[#4c1d95] py-3 px-8 rounded-full hover:opacity-80 hover:shadow-lg transition duration-500 w-full" type="submit">REGISTER</button>
                        <p class="text-base font-medium">Sudah punya akun?<a href="{{route('login')}}" class="text-base font-medium text-[#4c1d95]">Login.</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- register end -->
</body>
</html>
