<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://unpkg.com/@heroicons/react@1.0.6/outline">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="{{asset('img/logo.png')}}" type="gambar/tipe ikon">
    <style>
        .icon-overlay {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .image-container:hover .icon-overlay {
            display: block;
        }
    </style>
</head>

@extends('app')

@section('konten')
<body class="min-h-screen flex flex-col">

    <div class="px-8">
        <p class="text-4xl font-bold">Contact Us</p>
        <p class="py-4">Terima kasih telah mengunjungi situs Troublemaker. Jika Anda memiliki pertanyaan seputar brand kami, saran, atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi kami melalui formulir di bawah ini. Kami siap membantu Anda!</p>
        <hr>
    </div>

    <!-- Main content -->
    <div class="flex-grow flex items-center justify-center mt-16">
        <div class="bg-violet-50 shadow-md rounded-lg p-8 max-w-4xl w-full flex">
            <!-- Image Section -->
            <div class="w-1/2 p-4 image-container relative">
                <img src="https://img.ws.mms.shopee.co.id/id-11134207-7r98s-lqsu8x2hxoi8ab" alt="Contact Image" class="rounded-lg cursor-pointer" id="shopeeImage">
                <div class="icon-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14l1 12H4L5 8zm5-6h4v6h-4V2zm6 6V2a2 2 0 00-2-2H9a2 2 0 00-2 2v6h10z" />
                    </svg>
                </div>
            </div>
            <!-- Form Section -->
            <div class="w-1/2 p-4">
                <h2 class="text-2xl font-bold mb-6 text-center">Contact Us</h2>
                <form id="contactForm">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                        <input type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Email">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Message"></textarea>
                    </div>
                    <div class="flex items-center justify-center">
                        <button id="sendMessageButton" class="bg-violet-800 hover:bg-violet-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('shopeeImage').addEventListener('click', function() {
            // Redirect to Shopee
            window.location.href = 'https://shopee.co.id/search?keyword=troublemaker_obsessed&trackingId=searchhint-1720193951-b974c59e-3ae4-11ef-9d09-763feeabe97e';
        });
    </script>
    @endsection
</body>
</html>