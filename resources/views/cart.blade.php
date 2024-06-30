<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>

<nav class="bg-violet-950">
    <div class="flex items-center justify-between p-4">
        <a href="#" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="#ffffff" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
            </svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cart</span>
        </a>

        <div class="items-right justify-between w-2/3" id="navbar-search">
            <div class="relative mt-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
            </div>
        </div>
    </div>
</nav>

<div class="container mx-auto mt-8">
    <div class="overflow-x-auto shadow-md">
        <table class="w-full text-sm text-center text-black">
            <thead class="text-lg text-black">
            <tr>
                <th scope="col" class="px-6 py-3 h-4 w-4">
                    -
                </th>
                <th scope="col" class="px-6 py-3">
                    Produk
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Kuantitas
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
            </thead>

            <tbody class="item-center">
                @foreach ($carts as $cart)
                <tr class="justify-center">
                    <td class="px-6 py-4">
                        <div class="flex items-center mb-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900 items-center flex">
                        <img src="{{ asset($cart->product->image) }}" class="w-24 h-24 mb-3 shadow-lg" alt="Product Image">
                        <p class="pr-4">{{ $cart->product->name }}</p>
                    </td>
                    <td class="px-6 py-4">
                        {{ $cart->product->size }}
                    </td>
                    <td class="px-6 py-4">
                        Rp. {{ number_format($cart->product->price, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $cart->quantity }}
                    </td>
                    <td class="px-6 py-4">
                        {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update</a> --}}
                        <a href="#" class="ml-2 font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="6" class="px-6 py-4 text-right">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Checkout</button>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
</div>

</body>
</html>
