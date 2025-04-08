<nav class="absolute top-10 left-0 w-full z-50 py-6 px-12">
    <div class="container mx-auto flex items-center justify-start">
        <!-- Logo -->
        <a href="#" class="text-3xl font-extrabold text-black mr-20">TASTY FOOD</a>

        <!-- Desktop Menu (Aligned Left & Bigger) -->
        <ul class="hidden md:flex space-x-14 text-xl">
            <li><a href="/" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
            <li><a href="/about" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
            <li><a href="#" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
            <li><a href="#" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
            <li><a href="#" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden focus:outline-none ml-auto">
            <svg class="w-10 h-10 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" 
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="absolute left-0 top-20 w-full bg-white hidden md:hidden shadow-md">
            <ul class="flex flex-col space-y-4 p-6">
                <li><a href="/" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                <li><a href="/about" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
            </ul>
        </div>
    </div>
</nav>