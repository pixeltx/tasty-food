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
        <form action="{{ route('contact.send') }}" method="POST" class="grid md:grid-cols-2 gap-4">
          @csrf
          <!-- Left Column: Subject, Name, Email -->
          <div class="flex flex-col space-y-4">
            <input type="text" name="subject" placeholder="Subject" class="border rounded-lg p-4 w-full" />
            <input type="text" name="name" placeholder="Name" class="border rounded-lg p-4 w-full" />
            <input type="email" name="email" placeholder="Email" class="border rounded-lg p-4 w-full" />
          </div>
      
          <!-- Right Column: Message -->
          <div>
            <textarea placeholder="Message" name="message" class="border rounded-lg p-4 w-full h-full min-h-[184px] md:h-[205px]"></textarea>
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
            <a href="mailto:{{ $settings['email'] }}">
                <img src="{{ asset('img/Group 66.png') }}" alt="Email Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">EMAIL</h4>
            <p class="text-base">{{ $settings['email'] }}</p>
        </div>
    
        <!-- PHONE -->
        <div class="space-y-3">
            <a href="tel:{{ $settings['phone'] }}">
                <img src="{{ asset('img/Group 67.png') }}" alt="Phone Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">PHONE</h4>
            <p class="text-base">{{ $settings['phone'] }}</p>
        </div>
    
        <!-- LOCATION -->
        <div class="space-y-3">
            <a href="#">
                <img src="{{ asset('img/Group 68.png') }}" alt="Location Icon" class="mx-auto w-16 h-16">
            </a>
            <h4 class="font-semibold text-lg">LOCATION</h4>
            <p class="text-base">{{ Str::limit($location->address, 20, '...') }}</p>
        </div>
    </section>
    
    <!-- Google Maps Embed -->
    <section class="px-6 md:px-20 pb-20">
        <div class="rounded-xl overflow-hidden">
            @if ($location)
            <iframe
                src="https://www.google.com/maps?q={{ $location->latitude }},{{ $location->longitude }}&hl=id&z=14&output=embed"
                width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-[400px] border-0">
            </iframe>
            @else
                <p class="text-center text-gray-500">Location data is not available.</p>
            @endif
        </div>
    </section>
</x-app>