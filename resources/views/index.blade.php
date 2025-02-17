<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasty Food</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100">
    <!-- Header -->
    <header class="flex items-center justify-between p-6 relative">
        <div class="flex items-center">
            <h1 class="text-xl font-bold">TASTY FOOD</h1>
            <nav class="ml-8">
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-gray-600">HOME</a></li>
                    <li><a href="#" class="hover:text-gray-600">TENTANG</a></li>
                    <li><a href="#" class="hover:text-gray-600">BERITA</a></li>
                    <li><a href="#" class="hover:text-gray-600">GALERI</a></li>
                    <li><a href="#" class="hover:text-gray-600">KONTAK</a></li>
                </ul>
            </nav>
        </div>
        <div class="absolute top-0 right-0 w-[600px] md:w-[700px] lg:w-[800px] overflow-hidden">
            <img src="{{ asset('img/img-4-2000x2000.png') }}" alt="Tasty Food" class="w-full h-auto object-cover">
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="relative flex items-center px-12 py-20 overflow-hidden">
        <div class="max-w-xl">
            <h2 class="text-5xl font-bold leading-tight">HEALTHY <span class="text-gray-700">TASTY FOOD</span></h2>
            <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="mt-6 px-6 py-3 bg-black text-white font-semibold">TENTANG KAMI</button>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="text-center py-16 bg-white">
        <h2 class="text-2xl font-bold">TENTANG KAMI</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
</body>
</html>