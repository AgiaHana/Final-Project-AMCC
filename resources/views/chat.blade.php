<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('img/logo.png')}}" type="gambar/tipe ikon">
    <style>
        .slide-left-enter-active {
            transition: transform 0.5s ease-in-out;
        }
        .slide-left-enter {
            transform: translateX(100%);
        }
        .slide-left-enter-to {
            transform: translateX(0%);
        }
    </style>
</head>
<body class="bg-violet-100 h-screen overflow-hidden">
    <div id="chat-container" class="flex flex-col h-full slide-left-enter slide-left-enter-active">
        <!-- Header -->
        <header class="bg-violet-900 shadow-md py-4 px-6 flex items-center justify-between">
            <div class="flex items-center">
                <button class="text-white mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </button>
                <h2 class="text-lg font-semibold text-white">Chat</h2>
            </div>
            <div class="flex items-center">
                <span class="text-green-500 w-3 h-3 rounded-full bg-green-500 mr-2"></span>
            </div>
        </header>

        <!-- Chat Area -->
        <main class="flex-1 overflow-y-auto p-6">
            <div class="flex flex-col space-y-4">
                <div class="self-start">
                    <div class="bg-violet-500 text-white p-3 rounded-lg inline-block">
                        Halo! Outwear Jacket-nya masih ready gk?
                    </div>
                </div>
                <div class="self-end">
                    <div class="bg-white text-violet-900 p-3 rounded-lg inline-block">
                        Halo juga kak, masih ya kak Outwear Jacket-nya sudah restock lagi.
                    </div>
                </div>
                <div class="self-start">
                    <div class="bg-violet-500 text-white p-3 rounded-lg inline-block">
                        Oke kak saya checkout sekarang.
                    </div>
                </div>
                <div class="self-end">
                    <div class="bg-white text-violet-900 p-3 rounded-lg inline-block">
                        Terima kasih kak. Ditunggu next ordernya lagi.
                    </div>
                </div>
            </div>
        </main>

        <!-- Input Area -->
        <footer class="bg-white p-4 flex items-center">
            <input type="text" placeholder="Type message..." class="flex-1 py-2 px-4 bg-gray-100 rounded-full outline-none">
            <button class="bg-violet-500 text-white p-3 rounded-full ml-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const chatContainer = document.getElementById('chat-container');
            chatContainer.classList.add('slide-left-enter-to');
        });
    </script>
</body>
</html>