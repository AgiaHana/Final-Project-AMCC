<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  @yield('title')
</head>

<style>
    .hidden-1 {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s, transform 0.5s;
    }
    .visible-1 {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<body>
    <div class="bg-white">
        <header class="fixed inset-x-0 top-0 z-50">
          <nav class="flex items-center justify-between px-6 py-4 bg-white" aria-label="Global">
            <div class="flex lg:flex-1">
                <img class="h-10 w-auto" src="{{ ('img/logo.png') }}" alt="logo">
            </div>

            <div class=" lg:flex lg:gap-x-12 px-6">
              <a href="{{route('landing')}}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
              <a href="{{route('produk')}}" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contact Us</a>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">History</a>
            </div>
            
            <div class="flex gap-6 items-center">
            <form class="max-w-md mx-auto" style="margin-left: 24px">   
                <label for="default-search" class="mb-2 text-sm font-medium text-violet-950 sr-only">Search</label>
                
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-violet-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path class="text-violet-950 hover:ring-4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>

                    <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-violet-950 border border-violet-950 rounded-full focus:ring-violet-500 " placeholder="Search" required />
                </div>
            </form>

            <div class="flex gap-5 justify-end">
                <a href="{{route('cart')}}">
                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#2e1065">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                </a>
                
                <a href="">
                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#2e1065">
                    <path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg>
                </a>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-4">
              @if(Auth::check())
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="text-sm font-semibold text-violet-950 hover:ring-4 outline rounded-full py-2 px-4">Logout</button>
                  </form>
              @else
                  <a href="{{ route('login') }}" class="text-sm font-semibold text-violet-950 hover:ring-4 outline rounded-full py-2 px-4">Log in</a>
                  <a href="{{ route('register') }}" class="text-sm font-semibold text-white outline outline-violet-950 rounded-full py-2 px-4 bg-violet-950 hover:ring-4">Register</a>
              @endif
            </div>
        </div>
          </nav>
</header>

<div class="relative isolate pt-20">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="py-10">
      <div class="text-center">
        @yield('konten')
      </div>
    </div>
    
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@1.5.3/dist/flowbite.min.js"></script>
  <script>
      flowbite.tabs();
      flowbite.accordion();
  </script>
</body>
</html>