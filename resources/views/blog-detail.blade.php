<x-app>
    <nav class="fixed top-0 left-0 w-full z-50 bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-12">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-extrabold text-gray-900">TASTY FOOD</a>
    
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-10 text-base font-semibold">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-black">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-black">About</a></li>
                <li><a href="{{ route('blog') }}" class="text-gray-600 hover:text-black">Blog</a></li>
                <li><a href="{{ route('gallery') }}" class="text-gray-600 hover:text-black">Gallery</a></li>
                <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-black">Contact</a></li>
            </ul>
    
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
    
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="absolute left-0 top-full w-full bg-white hidden lg:hidden shadow-md">
                <ul class="flex flex-col space-y-2 sm:space-y-3 p-4 sm:p-5">
                    <li><a href="/" class="block py-2 sm:py-3 px-4 text-gray-700 hover:text-black font-semibold text-sm sm:text-base">HOME</a></li>
                    <li><a href="/about" class="block py-2 sm:py-3 px-4 text-gray-700 hover:text-black font-semibold text-sm sm:text-base">TENTANG</a></li>
                    <li><a href="/blog" class="block py-2 sm:py-3 px-4 text-gray-700 hover:text-black font-semibold text-sm sm:text-base">BERITA</a></li>
                    <li><a href="/gallery" class="block py-2 sm:py-3 px-4 text-gray-700 hover:text-black font-semibold text-sm sm:text-base">GALERI</a></li>
                    <li><a href="/contact" class="block py-2 sm:py-3 px-4 text-gray-700 hover:text-black font-semibold text-sm sm:text-base">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-24 px-4 md:px-20 bg-gray-50 min-h-screen">
        <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('blog') }}" class="inline-flex items-center text-gray-600 hover:text-black font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Blog
                </a>
            </div>

            <!-- Blog Title -->
            <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $blog->title }}</h1>

            <!-- Blog Image -->
            <div class="overflow-hidden rounded-xl shadow mb-8">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-80 object-cover" />
            </div>

            <!-- Blog Content -->
            <div class="prose prose-lg max-w-none text-gray-800">
                {!! $blog->content !!}
            </div>
        </div>
    </section>
</x-app>