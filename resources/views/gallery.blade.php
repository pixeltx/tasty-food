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
        <h1 class="z-10 pt-8 text-left text-4xl md:text-6xl font-bold">GALERI KAMI</h1>
    </section>

    <!-- Carousel Section -->
  <div class="py-12 px-4 md:px-20">
    <div class="relative">
      <!-- Image Carousel -->
      <div class="overflow-hidden rounded-xl shadow-lg">
        <img src="{{ asset('img/ella-olsson-mmnKI8kMxpc-unsplash.jpg') }}" class="w-full object-cover max-h-96" alt="carousel image">
      </div>

      <!-- Prev Button -->
      <button class="absolute left-2 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <!-- Next Button -->
      <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Gallery Grid -->
    <div class="px-4 md:px-20 pb-20">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        @foreach ([
            'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
            'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
            'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
            'brooke-lark-nBtmglfY0HU-unsplash.jpg',
            'brooke-lark-oaz0raysASk-unsplash.jpg',
            'eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg',
            'ella-olsson-mmnKI8kMxpc-unsplash.jpg',
            'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
            'anh-nguyen-kcA-c3f_3FE-unsplash.jpg',
            'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
            'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
            'Group 70.png'
        ] as $image)
            <div class="w-full aspect-square overflow-hidden rounded-xl">
            <img src="{{ asset('img/' . $image) }}" class="w-full h-full object-cover" alt="gallery" />
            </div>
        @endforeach
        </div>
    </div>
</x-app>