<header class="bg-white border-b border-[#e6a4b4] fixed top-0 left-0 right-0 z-50">
      <nav class="flex justify-between items-center w-[92%] mx-auto max-w-7xl py-3">
        
        <!-- Logo -->
        <div class="flex items-center gap-3">
          <span class="text-[#e6a4b4] text-2xl font-bold leading-none md:text-xl md:hidden">JC</span>
          <span class="text-[#e6a4b4] text-xl font-bold hidden md:block">Jullie Collection</span>
        </div>
        
        <!-- Search Bar -->
        <div class="flex-1 mx-6 hidden md:flex items-center max-w-xl w-full">
          <input 
          type="text" 
          placeholder="Cari di Jullie Collection" 
          class="w-full px-4 py-2 border border-[#e6a4b4] rounded-l-xl focus:outline-none focus:ring text-sm"
          />
          <button class="bg-[#e6a4b4] text-white px-4 py-2 rounded-r-xl hover:bg-[#d18fa0]">
            <i class="fas fa-search"></i>
          </button>
        </div>
        
        <!-- Ikon dan Tombol -->
        <div class="flex items-center gap-4">
          <a href="#" class="hidden md:block">
            <i class="fas fa-shopping-cart text-[#e6a4b4] text-xl"></i>
          </a>
          <a href="login.php" class="border border-[#e6a4b4] text-[#e6a4b4] px-4 py-1 rounded-xl hover:bg-[#f9d8df] hidden md:block">
            Masuk
          </a>
          <a class="bg-[#e6a4b4] text-white px-4 py-1 rounded-xl hover:bg-[#d18fa0] hidden md:block">
            Daftar
          </a>
          <!-- Hamburger Menu Mobile -->
          <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden text-[#e6a4b4]"></ion-icon>
        </div>
      </nav>

      <div id="mobileMenu" class="md:hidden bg-white px-6 py-4 hidden border-t border-[#e6a4b4]">
  <input 
    type="text" 
    placeholder="Cari di Jullie Collection" 
    class="w-full px-4 py-2 border border-[#e6a4b4] rounded-xl focus:outline-none focus:ring text-sm mb-4"
  />
  <ul class="flex flex-col gap-3 text-[#e6a4b4]">
    <li><a href="#">Keranjang</a></li>
    <li><a href="#">Masuk</a></li>
    <li><a href="#">Daftar</a></li>
  </ul>
</div>
    </header>