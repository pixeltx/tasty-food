<x-app>
    {{-- Navbar --}}
    <nav class="absolute top-10 left-0 w-full z-50 py-6 px-12">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-3xl font-extrabold text-white">TASTY FOOD</a>
    
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
              <svg class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
    
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="absolute right-0 top-20 w-full bg-gray-800 text-white hidden md:hidden shadow-md">
                <ul class="flex flex-col space-y-4 p-6">
                    <li><a href="/" class="hover:text-gray-200 font-semibold">HOME</a></li>
                    <li><a href="/about" class="hover:text-gray-200 font-semibold">TENTANG</a></li>
                    <li><a href="/blog" class="hover:text-gray-200 font-semibold">BERITA</a></li>
                    <li><a href="/gallery" class="hover:text-gray-200 font-semibold">GALERI</a></li>
                    <li><a href="/contact" class="hover:text-gray-200 font-semibold">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="relative bg-cover bg-center h-[75vh] flex items-center text-white px-12" 
    style="background-image: url('{{ asset('img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <h1 class="z-10 pt-8 text-left text-4xl md:text-6xl font-bold">TENTANG KAMI</h1>
    </section>
  
  <!-- ABOUT CONTENT -->
  <section class="py-16 px-4 md:px-20 bg-white">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-2xl font-bold mb-4">TASTY FOOD</h2>
        <p class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <p class="mt-4 text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
      <div class="flex space-x-4">
        <img src="{{ asset('img/brooke-lark-oaz0raysASk-unsplash.jpg') }}" class="rounded-xl w-1/2 object-cover shadow-lg" />
        <img src="{{ asset('img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}" class="rounded-xl w-1/2 object-cover shadow-lg" />
      </div>
    </div>
  </section>
  
  <!-- VISI -->
  <section class="py-16 px-4 md:px-20 bg-gray-100">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div class="order-1 md:order-2">
            <h2 class="text-xl font-semibold mb-2">VISI</h2>
            <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>

        <div class="flex space-x-4 order-2 md:order-1">
            <img src="{{ asset('img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}" class="rounded-xl w-1/2 object-cover shadow-lg" />
            <img src="{{ asset('img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}" class="rounded-xl w-1/2 object-cover shadow-lg" />
        </div>
    </div>
</section>
  
  <!-- MISI -->
  <section class="py-16 px-4 md:px-20 bg-white">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <h2 class="text-xl font-semibold mb-2">MISI</h2>
        <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
      <div>
        <img src="{{ asset('img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}" class="rounded-xl w-full object-cover shadow-lg aspect-[16/9]" />
      </div>
    </div>
  </section>
</x-app>