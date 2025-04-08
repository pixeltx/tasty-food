<x-app>
    {{-- Navbar --}}
    <nav class="absolute top-10 left-0 w-full z-50 py-6 px-12">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-3xl font-extrabold text-white">TASTY FOOD</a>
    
            <!-- Desktop Menu (Aligned Right) -->
            <ul class="hidden md:flex space-x-14 text-xl ml-auto">
                <li><a href="/" class="text-white hover:text-black font-semibold">HOME</a></li>
                <li><a href="/about" class="text-white hover:text-black font-semibold">TENTANG</a></li>
                <li><a href="/blog" class="text-white hover:text-black font-semibold">BERITA</a></li>
                <li><a href="/gallery" class="text-white hover:text-black font-semibold">GALERI</a></li>
                <li><a href="/contact" class="text-white hover:text-black font-semibold">KONTAK</a></li>
            </ul>
    
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="md:hidden focus:outline-none ml-auto">
                <svg class="w-10 h-10 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
    
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="absolute right-0 top-20 w-full bg-white hidden md:hidden shadow-md">
                <ul class="flex flex-col space-y-4 p-6">
                    <li><a href="/" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                    <li><a href="/about" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
                    <li><a href="/blog" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                    <li><a href="/gallery" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="relative bg-cover bg-center h-[75vh] flex items-center text-white px-12" 
    style="background-image: url('{{ asset('img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="z-10 pt-8 text-left text-4xl md:text-6xl font-bold">BERITA KAMI</h1>
    </section>

    <!-- Main Article -->
  <section class="py-16 px-4 md:px-20 bg-gray-100">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <img src="{{ asset('img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" class="rounded-2xl shadow-lg w-full object-cover aspect-[1/1]" />
      <div>
        <h2 class="text-2xl md:text-3xl font-bold mb-4">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus...</p>
        <p class="mb-6">Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
        <button class="bg-black text-white py-2 px-6 rounded-md hover:bg-gray-800">BACA SELENGKAPNYA</button>
      </div>
    </div>
  </section>

  <!-- Other News -->
  <section class="py-16 px-4 md:px-20">
    <h2 class="text-2xl font-bold mb-10">BERITA LAINNYA</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <!-- Card -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>
      
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="w-full h-40 object-cover" />
        <div class="p-4">
          <h3 class="font-bold text-lg mb-1">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
        </div>
      </div>

    </div>
  </section>
</x-app>