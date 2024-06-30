<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>History</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <nav class="bg-violet-950">
        <div class="flex items-center justify-between p-4">
            <a href="{{ route('cart') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#ffffff"
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">History</span>
            </a>

            <div class="items-right justify-between w-100" id="navbar-search">
                <div class="relative mt-3">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search...">
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
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order ID
                        </th>
                        <th>
                            Item Detail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Amount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transaction Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transaction Time
                        </th>
                    </tr>
                </thead>
                <tbody class="item-center">
                    @foreach ($transactions as $index => $transaction)
                        @php
                            $transaction_details = json_decode($transaction->transaction_details);
                            $item_details = json_decode($transaction->item_details);
                        @endphp
                        <tr class="justify-center">
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">{{ $transaction_details->order_id }}</td>
                            <td class="px-6 py-4">
                                <ul>
                                    @foreach ($item_details as $item)
                                        <li>{{ $item->name }} - {{ $item->quantity }} pcs</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="px-6 py-4">Rp.
                                {{ number_format($transaction_details->gross_amount, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ $transaction->transaction_status }}</td>
                            <td class="px-6 py-4">{{ $transaction->created_at->format('d M Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>
