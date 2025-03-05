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
    <section class="relative flex items-center justify-center h-[600px]">
        <!-- Background Image -->
        <img src="{{ asset('img/group 70@2x.png') }}" 
             alt="Background" 
             class="absolute top-0 left-0 w-full h-full object-cover">
        
        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 flex items-center justify-center w-full h-full">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 justify-center items-center">
                <div class="bg-white p-8 shadow-md rounded-xl relative flex flex-col items-center text-center min-h-[260px]">
                    <img src="{{ asset('img/img-1.png') }}" 
                        alt="Menu 1" 
                        class="w-[80%] max-w-full h-auto object-cover absolute top-[-5rem]">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="bg-white p-8 shadow-md rounded-xl relative flex flex-col items-center text-center min-h-[260px]">
                    <img src="{{ asset('img/img-2.png') }}" 
                        alt="Menu 2" 
                        class="w-[80%] max-w-full h-auto object-cover absolute top-[-5rem]">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="bg-white p-8 shadow-md rounded-xl relative flex flex-col items-center text-center min-h-[260px]">
                    <img src="{{ asset('img/img-3.png') }}" 
                        alt="Menu 3" 
                        class="w-[80%] max-w-full h-auto object-cover absolute top-[-5rem]">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="bg-white p-8 shadow-md rounded-xl relative flex flex-col items-center text-center min-h-[260px]">
                    <img src="{{ asset('img/img-4.png') }}" 
                        alt="Menu 4" 
                        class="w-[80%] max-w-full h-auto object-cover absolute top-[-5rem]">
                    <h3 class="font-bold mt-24">Lorem Ipsum</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10">BERITA KAMI</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Large Left News Card -->
                <div class="lg:col-span-1 bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('img/news-1.jpg') }}" alt="News 1" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-xl">Judul Berita Utama</h3>
                        <p class="text-gray-600 text-sm mt-2">Deskripsi lebih panjang untuk berita utama yang lebih menarik dan mendetail.</p>
                    </div>
                </div>
    
                <!-- Right Side (4 Smaller Cards in 2x2 Grid) -->
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Small News Card 1 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{ asset('img/news-2.jpg') }}" alt="News 2" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Judul Berita 2</h3>
                            <p class="text-gray-600 text-sm mt-2">Deskripsi singkat berita menarik.</p>
                        </div>
                    </div>
    
                    <!-- Small News Card 2 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{ asset('img/news-3.jpg') }}" alt="News 3" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Judul Berita 3</h3>
                            <p class="text-gray-600 text-sm mt-2">Deskripsi singkat berita menarik.</p>
                        </div>
                    </div>
    
                    <!-- Small News Card 3 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{ asset('img/news-4.jpg') }}" alt="News 4" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Judul Berita 4</h3>
                            <p class="text-gray-600 text-sm mt-2">Deskripsi singkat berita menarik.</p>
                        </div>
                    </div>
    
                    <!-- Small News Card 4 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="{{ asset('img/news-5.jpg') }}" alt="News 5" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg">Judul Berita 5</h3>
                            <p class="text-gray-600 text-sm mt-2">Deskripsi singkat berita menarik.</p>
                        </div>
                    </div>
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
    <footer class="bg-zinc-900 text-white py-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Left Section -->
            <div>
                <h2 class="text-xl font-bold">Tasty Food</h2>
                <p class="mt-2 text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white text-2xl">
                        <i class=""><img src="{{ asset('img/001-facebook.png') }}" alt=""></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white text-2xl">
                        <i class=""><img src="{{ asset('img/002-twitter.png') }}" alt=""></i>
                    </a>
                </div>
            </div>
    
            <!-- Middle left Section -->
            <div class="flex text-white flex-col space-y-2">
                <h3 class="text-lg font-semibold">Useful Links</h3>
                <a href="#" class="hover:text-gray-100">Blog</a>
                <a href="#" class="hover:text-gray-100">Hewan</a>
                <a href="#" class="hover:text-gray-100">Galeri</a>
                <a href="#" class="hover:text-gray-100">Testimonial</a>
            </div>

            <!-- Middle right Section -->
            <div class="flex text-white flex-col space-y-2">
                <h3 class="text-lg font-semibold">Privacy</h3>
                <a href="#" class="hover:text-gray-100">Karir</a>
                <a href="#" class="hover:text-gray-100">Tentang Kami</a>
                <a href="#" class="hover:text-gray-100">Kontak Kami</a>
                <a href="#" class="hover:text-gray-100">Servis</a>
            </div>
    
            <!-- Right Section -->
            <div class="flex text-white flex-col space-y-2">
                <h3 class="text-lg font-semibold">Contact Info</h3>
                <a href="#" class="hover:text-gray-100 flex items-center space-x-2">
                    <img src="{{ asset('img/Group 66.png') }}" alt="" class="w-10 h-10">
                    <p class="">tastyfood@gmail.com</p>
                </a>
                <a href="#" class="hover:text-gray-100 flex items-center space-x-2">
                    <img src="{{ asset('img/Group 67.png') }}" alt="" class="w-10 h-10">
                    <p class="">+62 812 3456 7890</p>
                </a>
                <a href="#" class="hover:text-gray-100 flex items-center space-x-2">
                    <img src="{{ asset('img/Group 68.png') }}" alt="" class="w-10 h-10">
                    <p class="">Kota Bandung, Jawa Barat</p>
                </a>
            </div>
        </div>
    
        <div class="mt-8 text-center pt-4">
            <p class="text-gray-500">Copyright &copy; 2025 All rights reserved</p>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>
</body>
</html>
