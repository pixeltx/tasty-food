<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Home</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100 overflow-x-hidden">
    <!-- Navbar -->
    <nav class="absolute top-10 left-0 w-full z-50 py-6 px-12">
        <div class="container mx-auto flex items-center justify-start">
            <!-- Logo -->
            <a href="#" class="text-3xl font-extrabold text-black mr-20">TASTY FOOD</a>
    
            <!-- Desktop Menu (Aligned Left & Bigger) -->
            <ul class="hidden md:flex space-x-14 text-xl">
                <li><a href="#" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                <li><a href="#" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
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
                    <li><a href="#" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="relative w-full h-screen min-h-[105vh] flex items-center">
        <div class="container mx-auto px-12 flex items-center">
            <!-- Left Section: Text Content -->
            <div class="max-w-2xl">
                <hr class="w-24 border-2 border-x border-black mb-4">
                <h2 class="text-6xl font-bold leading-tight">HEALTHY <br><span class="text-gray-900">TASTY FOOD</span></h2>
                <p class="mt-6 text-lg text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
                <button class="mt-8 px-20 py-4 bg-black text-white text-lg font-semibold">TENTANG KAMI</button>
            </div>
        
            <!-- Right Section: Image -->
            <div class="absolute top-[-16%] right-[-15%] w-[55%] h-full overflow-hidden">
                <img src="{{ asset('img/img-4-2000x2000.png') }}" 
                    alt="Tasty Food" 
                    class="w-full h-full object-cover object-right">
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="text-center py-16 bg-white">
        <h2 class="text-2xl font-bold">TENTANG KAMI</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, consectetur praesentium reprehenderit voluptatem exercitationem facere earum. Asperiores voluptates, natus ex rem nam veniam dolorem nulla voluptatibus molestiae, labore earum eligendi deserunt assumenda omnis magnam veritatis ipsa deleniti repellat impedit necessitatibus.</p>
        <hr class="w-24 border-2 border-x border-black mx-auto mt-8 mb-4">
    </section>

    {{-- 4 Menu Section --}}
    <section style="background-image: url('{{ asset('img/group 70@2x.png') }}');" class="py-16 bg-cover bg-center bg-no-repeat">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <div class="bg-white p-4 shadow-md rounded-xl relative">
                    <img src="{{ asset('img/img-1.png') }}" alt="Menu 1" class="w-full h-48 object-cover mb-4 absolute top-[-50%] left-1/2 transform -translate-x-1/2">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-xl relative overflow-hidden">
                    <img src="{{ asset('img/img-2.png') }}" alt="Menu 2" class="w-full h-48 object-cover mb-4 absolute top-[-50%] left-1/2 transform -translate-x-1/2">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-xl relative overflow-hidden">
                    <img src="{{ asset('img/img-3.png') }}" alt="Menu 3" class="w-full h-48 object-cover mb-4 absolute top-[-50%] left-1/2 transform -translate-x-1/2">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bg-white p-6 shadow-md rounded-xl relative overflow-hidden">
                    <img src="{{ asset('img/img-4.png') }}" alt="Menu 4" class="w-full h-48 object-cover mb-4 absolute top-[-50%] left-1/2 transform -translate-x-1/2">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6">BERITA KAMI</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 shadow-md">
                    <h3 class="font-bold">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bg-white p-6 shadow-md">
                    <h3 class="font-bold">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bg-white p-6 shadow-md">
                    <h3 class="font-bold">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="py-16">
        <h2 class="text-2xl font-bold text-center">GALERI KAMI</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-6">
            <img src="" alt="">
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-black text-white text-center p-6">
        <p>&copy; 2025 Tasty Food. All rights reserved.</p>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>
</body>
</html>
