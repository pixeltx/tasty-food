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
        <h1 class="z-10 pt-8 text-left text-4xl md:text-6xl font-bold">KONTAK KAMI</h1>
    </section>

    <!-- Contact Form -->
    <section class="px-6 md:px-20 py-16">
        <h2 class="text-2xl md:text-3xl font-bold mb-8">KONTAK KAMI</h2>
        <form class="grid md:grid-cols-2 gap-4">
          
          <!-- Left Column: Subject, Name, Email -->
          <div class="flex flex-col space-y-4">
            <input type="text" placeholder="Subject" class="border rounded-lg p-4 w-full" />
            <input type="text" placeholder="Name" class="border rounded-lg p-4 w-full" />
            <input type="email" placeholder="Email" class="border rounded-lg p-4 w-full" />
          </div>
      
          <!-- Right Column: Message -->
          <div>
            <textarea placeholder="Message" class="border rounded-lg p-4 w-full h-full min-h-[184px] md:h-[205px]"></textarea>
          </div>
      
          <!-- Full width Button under both columns -->
          <div class="md:col-span-2">
            <button class="bg-black text-white py-4 px-8 rounded-lg w-full">KIRIM</button>
          </div>
        </form>
    </section>
    
    <!-- Contact Info -->
    <section class="flex flex-col md:flex-row items-center justify-center text-center px-6 md:px-20 py-10 gap-10 md:gap-40">
        <!-- EMAIL -->
        <div class="space-y-3">
            <a href="#">
                <img src="{{ asset('img/Group 66.png') }}" alt="Email Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">EMAIL</h4>
            <p class="text-base">tastyfood@gmail.com</p>
        </div>
    
        <!-- PHONE -->
        <div class="space-y-3">
            <a href="#">
                <img src="{{ asset('img/Group 67.png') }}" alt="Phone Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">PHONE</h4>
            <p class="text-base">+62 812 3456 7890</p>
        </div>
    
        <!-- LOCATION -->
        <div class="space-y-3">
            <a href="#">
                <img src="{{ asset('img/Group 68.png') }}" alt="Location Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">LOCATION</h4>
            <p class="text-base">Kota Bandung, Jawa Barat</p>
        </div>
    </section>
    
    <!-- Google Maps Embed -->
    <section class="px-6 md:px-20 pb-20">
        <div class="rounded-xl overflow-hidden">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63374.79624054482!2d107.58003892483966!3d-6.903449608997443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b60eb37f65%3A0x401e8f1fc28b8b0!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
            width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="w-full h-[400px] border-0">
        </iframe>
        </div>
    </section>
</x-app>