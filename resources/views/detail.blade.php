@extends('app')

@section('title')
<title>Detail Produk</title>
@endsection

@section('konten')
<div>
    <div class="items-left pb-6 pl-6">
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="#" class="inline-flex items-center text-sm font-medium text-violet-950 hover:text-blue-600">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-violet-950 mx-1 pb-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </div>
      </li>
    </ol>
  </nav>
  
    </div>

    <div class="grid grid-cols-2 px-6">
        <div class="">
            <img class="h-auto max-w-lg" src="{{ asset('img/popular1.jpeg')}}" alt="image description">
        </div>

        <div>
            <p class="text-violet-950 font-bold text-3xl">Troublemaker - Short Pants - Gumlock Black</p>
            <p class="pt-6 text-left pl-6 font-semibold text-violet-950">Pilih Ukuran</p>
            <div class="grid grid-cols-4 gap-4 py-4 px-4">
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> S </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> M </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> L </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> XL </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> XXl </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> 3XL </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> 4XL </a>
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> 5XL </a>
            </div>

            <p class="pt-6 text-left pl-6 font-semibold text-violet-950">Pilih Warna</p>
            <div class="grid grid-cols-4 gap-4 py-4 px-4">
                <a href="#" class=" border border-violet-950 hover:ring-1 hover:ring-violet-950 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg px-2 py-2 items-left text-violet-950 text-xs"> Hitam </a>
            </div>

            <div class="flex items-center justify-between pt-6 pl-6">
                <span class="text-xl font-bold text-gray-900">
                    <p class="text-base text-left font-medium text-gray-500">Harga</p>Rp. 58.000</span>
                    <a href="#" class=" bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-2 py-2 flex">
                        <p class="text-white font-semibold text-base py-1 px-1">Add to Cart</p>
                    </a>
            </div>

            <div class="grid grid-cols-4 gap-4 pl-6 pt-6">
                <div class="h-24 w-24 ">
                    <img src="{{asset('img/celana1.jpeg')}}" alt="" class="rounded-lg">
                </div>
                <div class="h-24 w-24 ">
                    <img src="{{asset('img/celana2.jpeg')}}" alt="" class="rounded-lg">
                </div>
                <div class="h-24 w-24 ">
                    <img src="{{asset('img/celana3.jpeg')}}" alt="" class="rounded-lg">
                </div>
                <div class="h-24 w-24 ">
                    <img src="{{asset('img/celana4.jpeg')}}" alt="" class="rounded-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8">
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option>Deskripsi Produk</option>
                    <option>Ulasan</option>
                </select>
            </div>

            <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex " id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="desk-tab" data-tabs-target="#desk" type="button" role="tab" aria-controls="desk" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none">Deskripsi</button>
                </li>
                <li class="w-full">
                    <button id="ulasan-tab" data-tabs-target="#ulasan" type="button" role="tab" aria-controls="ulasan" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none ">Ulasan</button>
                </li>
            </ul>

            <div id="fullWidthTabContent" class="border-t border-gray-200">
                <div class=" p-4 bg-white rounded-lg md:p-8" id="desk" role="tabpanel" aria-labelledby="desk-tab">
                    <p class="text-violet-950 text-left font-bold text-xl">Deskripsi Produk</p>
                    <p class="text-left py-6">
                        Code : Gumlock Black <br>
                        Material : Crinkle <br>
                        Available Size : S M L XL XXL <br>
                        <br>
                        Size Chart : <br>
                        S : W 85cm x L 40cm LP 28cm <br>
                        M : W 90cm x L 42cm LP 30cm <br>
                        L : W 95cm x L 44cm LP 32cm <br>
                        XL : W 100cm x L 46cm LP 35cm <br>
                        XXL : W 105cm x L 48cm LP 38cm <br>
                        3XL : W 110cm x L 50cm LP 40cm <br>
                        4XL : W 115cm x L 52cm LP 42cm <br>
                        5XL : W 120cm x L 54cm LP 44cm <br>
                        <br>
                        W = Lingkar Pinggang <br>
                        L = Panjang Celana <br>
                        LP = Lebar Paha <br>
                        <br>
                        TANYAKAN TERLEBIH DAHULU KETERSEDIAAN STOK & UKURAN SEBELUM MELAKUKAN CHECK OUT <br>
                        * PERATURAN PENGEMBALIAN BARANG : <br>
                        1. PROSES PENGEMBALIAN BARANG HANYA AKAN DILAYANI JIKA KONSUMEN MEMBUAT VIDEO UNBOXING <br>
                        2. TIDAK MEMBERIKAN ULASAN & KOMENTAR NEGATIF <br>
                        3. KONFIRMASI VIA CHAT APABILA ADA KESALAHAN DARI KAMI
                    </p>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white rounded-lg md:p-8" id="ulasan" role="tabpanel" aria-labelledby="ulasan-tab">
            <h2 class="text-xl font-bold tracking-tight text-violet-950 text-left pb-6">Ulasan Produk</h2>
            <div class="w-full pl-6 border border-violet-950 rounded-lg shadow">
                <div class="flex py-4">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/komen2.jpeg')}}" alt="Bonnie image"/>

                    <div class="px-6">
                    <h5 class="mb-1 text-xl font-medium text-violet-950 text-left">kang_dakos</h5>
                    <div class="flex items-center mt-2 mb-2">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-xs text-gray-400 text-left">2023-10-19 09:09</p>
                    <p class="text-sm text-gray-800 font-medium py-2 text-left"> Produk sampai dgn cepat, kualitas lokal cukup bersaing di harga terjangkau. Keren buat trouble maker 😎 Jahitan semua rapih, model ga dimiliki produk lain, alus pisan.. Nuhun 😎 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    </div>
</div>

    </div>

{{-- Akhir --}}
</div>



@endsection