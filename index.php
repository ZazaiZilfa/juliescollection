<?php
session_start();

require 'include/function.php';

include "include/header.php";
include "include/navbar.php";
?>
    
      
    <div class="container main-content mx-auto pt-10 bg-white px-5">
      
      <div class="image-carousel relative w-full max-w-xl md:max-w-3xl lg:max-w-7xl mx-auto mt-10 ">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative rounded-2xl">
          <!-- Carousel items -->
          <div class="flex transition-all duration-500 ease-in-out" id="carousel">
            <!-- Slide 1 -->
            <div class="w-full h-64 md:h-[50vh] bg-cover bg-center flex-shrink-0" style="background-image: url('https://picsum.photos/1200/600?random=1');">
              <span class="sr-only">Slide 1</span>
            </div>
            <!-- Slide 2 -->
            <div class="w-full h-64 md:h-[50vh] bg-cover bg-center flex-shrink-0" style="background-image: url('https://picsum.photos/1200/600?random=2');">
              <span class="sr-only">Slide 2</span>
            </div>
            <!-- Slide 3 -->
            <div class="w-full h-64 md:h-[50vh] bg-cover bg-center flex-shrink-0" style="background-image: url('https://picsum.photos/1200/600?random=3');">
              <span class="sr-only">Slide 3</span>
            </div>
          </div>
        </div>
        
        <!-- Left button -->
        <button id="prev" class="absolute top-1/2 left-4 -translate-y-1/2 bg-[#e6a4b4] hover:bg-[#d18fa0] text-white p-2 rounded-full shadow">
          <i class="fas fa-chevron-left"></i>
        </button>
        <!-- Right button -->
        <button id="next" class="absolute top-1/2 right-4 -translate-y-1/2 bg-[#e6a4b4] hover:bg-[#d18fa0] text-white p-2 rounded-full shadow">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
      
      <section class="kategori w-full max-w-7xl mx-auto mt-16 px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-lg md:text-xl font-semibold text-[#e6a4b4]">
            Shop From <span class="text-gray-800 font-bold">Top Categories</span>
          </h2>
          <a href="#" class="text-sm text-gray-600 hover:text-[#e6a4b4]">View All</a>
        </div>
          
        <!-- Category Circles -->
        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-4 place-items-center">
          <!-- Card Item -->
          <div class="flex flex-col items-center">
            <div class="w-24 h-24 md:w-28 md:h-28 rounded-full border-2 border-[#e6a4b4] overflow-hidden">
              <img src="https://picsum.photos/200?random=11" alt="Katun Lokal" class="object-cover w-full h-full">
            </div>
            <p class="mt-2 text-sm text-center text-gray-700">Katun Lokal</p>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-24 h-24 md:w-28 md:h-28 rounded-full border-2 border-[#e6a4b4] overflow-hidden">
              <img src="https://picsum.photos/200?random=12" alt="Katun Lokal Premium" class="object-cover w-full h-full">
            </div>
            <p class="mt-2 text-sm text-center text-gray-700">Katun Premium</p>
          </div>
          
          <div class="flex flex-col items-center">
            <div class="w-24 h-24 md:w-28 md:h-28 rounded-full border-2 border-[#e6a4b4] overflow-hidden">
              <img src="https://picsum.photos/200?random=13" alt="Katun Jepang" class="object-cover w-full h-full">
            </div>
            <p class="mt-2 text-sm text-center text-gray-700">Katun Jepang</p>
          </div>
          <!-- 
            <div class="flex flex-col items-center">
              <div class="w-24 h-24 md:w-28 md:h-28 rounded-full border-2 border-[#e6a4b4] overflow-hidden">
                <img src="https://picsum.photos/200?random=14" alt="Katun Lokal Premium" class="object-cover w-full h-full">
              </div>
              <p class="mt-2 text-sm text-center text-gray-700">Katun Lokal Premium</p>
            </div>
            
            <div class="flex flex-col items-center">
              <div class="w-24 h-24 md:w-28 md:h-28 rounded-full border-2 border-[#e6a4b4] overflow-hidden">
                <img src="https://picsum.photos/200?random=15" alt="Katun Mikro Silk" class="object-cover w-full h-full">
              </div>
              <p class="mt-2 text-sm text-center text-gray-700">Katun Mikro Silk</p>
            </div> -->
          </div>
        </section>
        
        <section class="bestprice max-w-7xl mx-auto px-4 py-8">
          
          <!-- Header -->
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg md:text-xl font-semibold text-[#e6a4b4]">
              <span class="text-gray-800 font-bold">Best Seller</span>
            </h2>
            <a href="#" class="text-sm text-gray-600 hover:text-[#e6a4b4]">View All</a>
          </div>
          
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            
            <!-- Item -->
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=1" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <!-- Duplikat item -->
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=2" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <!-- Tambahkan lebih banyak item seperti ini -->
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=8" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=7" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=7" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=7" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=7" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=6" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=7" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
            
            <div class="bg-white rounded-lg shadow p-2">
              <img src="https://picsum.photos/300?random=15" alt="Product" class="w-full h-40 object-cover rounded">
              <h3 class="text-sm font-medium mt-2">Nama Produk</h3>
              <p class="text-red-500 font-semibold text-sm">Rp123.000</p>
              <p class="text-xs text-gray-500">Kab. Bandung</p>
            </div>
          </div>
          <!-- Tombol View All di bawah tengah -->
          <div class="mt-6 text-center">
            <a href="#" class="text-pink-500 font-medium hover:underline">View More</a>
          </div>
        </section>
        
      </div>

      <footer class="bg-[#fef2f4] text-[#e6a4b4] py-6 mt-10 border-t border-[#e6a4b4]">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-sm">
    <p class="mb-3 md:mb-0">&copy; 2025 Jullie Collection. All rights reserved.</p>
    <div class="flex gap-4">
      <a href="#" class="hover:underline">Tentang Kami</a>
      <a href="#" class="hover:underline">Kontak</a>
      <a href="#" class="hover:underline">Kebijakan Privasi</a>
    </div>
  </div>
</footer>

     <?php include 'include/script.php'; ?>   
        
        
        
 