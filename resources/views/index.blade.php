<x-app>
    {{-- Navbar --}}
    <nav class="absolute top-6 sm:top-8 lg:top-10 left-0 w-full z-50 py-4 sm:py-5 lg:py-6 px-4 sm:px-8 lg:px-12">
        <div class="container mx-auto flex items-center justify-between lg:justify-start">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-xl sm:text-2xl lg:text-3xl font-extrabold text-black lg:mr-12 xl:mr-20">TASTY FOOD</a>
    
            <!-- Desktop Menu -->
            <ul class="hidden lg:flex space-x-10 xl:space-x-14 text-lg xl:text-xl">
                <li><a href="/" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                <li><a href="/about" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
                <li><a href="/blog" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                <li><a href="/gallery" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                <li><a href="/contact" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
            </ul>
    
            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="lg:hidden focus:outline-none">
                <svg class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" 
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
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
    
    <!-- Header -->
    <header class="relative w-full h-auto sm:h-[80vh] lg:h-screen min-h-[80vh] lg:min-h-[105vh] flex items-center bg-gray-100 pt-28 sm:pt-32 lg:pt-0">
        <div class="container mx-auto px-4 sm:px-8 lg:px-12 flex items-center">
            <!-- Left Section: Text Content -->
            <div class="max-w-2xl text-center lg:text-left">
                <hr class="w-20 sm:w-24 border-2 border-x border-black mb-3 sm:mb-4 mx-auto lg:mx-0">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">HEALTHY <br><span class="text-gray-900">TASTY FOOD</span></h2>
                <p class="mt-4 sm:mt-6 text-sm sm:text-base lg:text-lg text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
                <button onclick="window.location.href='{{ route('about') }}'" class="mt-6 sm:mt-8 px-10 sm:px-14 lg:px-16 xl:px-20 py-2 sm:py-3 lg:py-4 bg-black text-white text-sm sm:text-base lg:text-lg font-semibold">TENTANG KAMI</button>
            </div>
        
            <!-- Right Section: Image -->
            <div class="hidden lg:block absolute top-[-16%] right-[-15%] w-[55%] h-full overflow-hidden">
                <img src="{{ asset('img/img-4-2000x2000.png') }}" 
                    alt="Tasty Food" 
                    class="w-full h-full object-cover object-right">
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="text-center py-10 sm:py-12 lg:py-16 bg-white px-4 sm:px-6">
        <h2 class="text-xl sm:text-2xl lg:text-2xl font-bold">TENTANG KAMI</h2>
        <p class="mt-3 sm:mt-4 text-gray-600 max-w-2xl mx-auto text-xs sm:text-sm lg:text-base">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, consectetur praesentium reprehenderit voluptatem exercitationem facere earum. Asperiores voluptates, natus ex rem nam veniam dolorem nulla voluptatibus molestiae, labore earum eligendi deserunt assumenda omnis magnam veritatis ipsa deleniti repellat impedit necessitatibus.
        </p>
        <hr class="w-20 sm:w-24 border-2 border-x border-black mx-auto mt-6 sm:mt-8 mb-3 sm:mb-4">
    </section>

    {{-- 4 Menu Section --}}
    <section class="relative flex items-center justify-center h-auto sm:h-[500px] lg:h-[600px] py-10 sm:py-12 lg:py-0">
        <!-- Background Image -->
        <img src="{{ asset('img/group 70@2x.png') }}" 
             alt="Background" 
             class="absolute top-0 left-0 w-full h-full object-cover">
        
        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 flex items-center justify-center w-full h-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6 w-full">
                <!-- Menu Item 1 -->
                <div class="bg-white p-5 sm:p-6 lg:p-8 shadow-md rounded-xl flex flex-col items-center text-center pb-8 sm:pb-10 lg:min-h-[240px] xl:min-h-[260px]">
                    <div class="w-[60%] sm:w-[65%] lg:w-[75%] xl:w-[80%] h-[90px] sm:h-[110px] lg:h-[140px] xl:h-[160px] -mt-12 sm:-mt-14 lg:-mt-16 xl:-mt-20 mb-3 sm:mb-4">
                        <img src="{{ asset('img/img-1.png') }}" 
                            alt="Menu 1" 
                            class="w-full h-full object-contain">
                    </div>
                    <h3 class="font-bold text-sm sm:text-base lg:text-lg">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-xs sm:text-sm lg:text-base mt-1 sm:mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                
                <!-- Menu Item 2 -->
                <div class="bg-white p-5 sm:p-6 lg:p-8 shadow-md rounded-xl flex flex-col items-center text-center pb-8 sm:pb-10 lg:min-h-[240px] xl:min-h-[260px]">
                    <div class="w-[60%] sm:w-[65%] lg:w-[75%] xl:w-[80%] h-[90px] sm:h-[110px] lg:h-[140px] xl:h-[160px] -mt-12 sm:-mt-14 lg:-mt-16 xl:-mt-20 mb-3 sm:mb-4">
                        <img src="{{ asset('img/img-2.png') }}" 
                            alt="Menu 2" 
                            class="w-full h-full object-contain">
                    </div>
                    <h3 class="font-bold text-sm sm:text-base lg:text-lg">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-xs sm:text-sm lg:text-base mt-1 sm:mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                
                <!-- Menu Item 3 -->
                <div class="bg-white p-5 sm:p-6 lg:p-8 shadow-md rounded-xl flex flex-col items-center text-center pb-8 sm:pb-10 lg:min-h-[240px] xl:min-h-[260px]">
                    <div class="w-[60%] sm:w-[65%] lg:w-[75%] xl:w-[80%] h-[90px] sm:h-[110px] lg:h-[140px] xl:h-[160px] -mt-12 sm:-mt-14 lg:-mt-16 xl:-mt-20 mb-3 sm:mb-4">
                        <img src="{{ asset('img/img-3.png') }}" 
                            alt="Menu 3" 
                            class="w-full h-full object-contain">
                    </div>
                    <h3 class="font-bold text-sm sm:text-base lg:text-lg">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-xs sm:text-sm lg:text-base mt-1 sm:mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                
                <!-- Menu Item 4 -->
                <div class="bg-white p-5 sm:p-6 lg:p-8 shadow-md rounded-xl flex flex-col items-center text-center pb-8 sm:pb-10 lg:min-h-[240px] xl:min-h-[260px]">
                    <div class="w-[60%] sm:w-[65%] lg:w-[75%] xl:w-[80%] h-[90px] sm:h-[110px] lg:h-[140px] xl:h-[160px] -mt-12 sm:-mt-14 lg:-mt-16 xl:-mt-20 mb-3 sm:mb-4">
                        <img src="{{ asset('img/img-4.png') }}" 
                            alt="Menu 4" 
                            class="w-full h-full object-contain">
                    </div>
                    <h3 class="font-bold text-sm sm:text-base lg:text-lg">Lorem Ipsum</h3>
                    <p class="text-gray-600 text-xs sm:text-sm lg:text-base mt-1 sm:mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-10 sm:py-12 lg:py-16 bg-gray-100 px-4 sm:px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center mb-6 sm:mb-8 lg:mb-10">BERITA KAMI</h2>
    
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-6">
                <!-- Big News Card -->
                @if ($blogs->isNotEmpty())
                    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col min-h-[400px] sm:min-h-[500px] lg:min-h-[600px] xl:min-h-[700px]">
                        <img src="{{ asset('storage/' . $blogs->first()->image) }}" alt="{{ $blogs->first()->title }}" class="w-full h-48 sm:h-64 lg:h-80 xl:h-96 object-cover">
                        <div class="p-4 sm:p-5 lg:p-6 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="font-semibold text-lg sm:text-xl lg:text-2xl">{{ $blogs->first()->title }}</h3>
                                <p class="text-gray-600 text-xs sm:text-sm lg:text-base mt-1 sm:mt-2">
                                    {!! Str::limit(preg_replace('/<(hr|u)[^>]*>/', '', $blogs->first()->content), 150) !!}
                                </p>
                            </div>
    
                            <div class="flex items-center mt-4 sm:mt-5 lg:mt-6 space-x-4 justify-between">
                                <a href="{{ route('blog.show', $blogs->first()->slug) }}" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
                                <a href="{{ route('blog.show', $blogs->first()->slug) }}" class="flex space-x-2">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
    
                <!-- Right Side: 4 Small News Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 lg:gap-6">
                    @foreach ($blogs->skip(1) as $blog)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col min-h-[250px] sm:min-h-[280px] lg:min-h-[320px] xl:min-h-[350px]">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-32 sm:h-36 lg:h-40 xl:h-40 object-cover">
                            <div class="p-3 sm:p-4 flex flex-col flex-grow justify-between">
                                <div>
                                    <h3 class="font-semibold text-base sm:text-lg lg:text-lg">{{ $blog->title }}</h3>
                                    <p class="text-gray-600 text-xs sm:text-sm lg:text-sm mt-1 sm:mt-2">
                                        {!! Str::limit(preg_replace('/<(hr|u)[^>]*>/', '', $blog->content), 75) !!}
                                    </p>
                                </div>
    
                                <div class="flex items-center mt-3 sm:mt-4 space-x-4 justify-between">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="text-yellow-500 text-sm font-semibold">Baca selengkapnya</a>
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="flex space-x-2">
                                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                        <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="py-8 sm:py-10 bg-white px-4 sm:px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center mb-4 sm:mb-6">Gallery</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 sm:gap-4 lg:gap-6" id="gallery-grid">
                @foreach ($galleries as $index => $gallery)
                    <div class="gallery-item {{ $index >= 6 ? 'hidden' : '' }} bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" class="w-full h-32 sm:h-40 lg:h-48 xl:h-64 object-cover">
                    </div>
                @endforeach
            </div>
            
            <button id="load-more-gallery" class="bg-black py-2 px-8 sm:px-10 lg:px-12 my-6 sm:my-8 lg:my-10 xl:my-12 block mx-auto text-white hover:bg-gray-800 text-xs sm:text-sm lg:text-base">
                LIHAT LEBIH BANYAK
            </button>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.gallery-item');
            const loadMoreBtn = document.getElementById('load-more-gallery');
            let visibleCount = 6;
            const increment = 6;
    
            loadMoreBtn.addEventListener('click', function () {
                for (let i = visibleCount; i < visibleCount + increment; i++) {
                    if (items[i]) {
                        items[i].classList.remove('hidden');
                    }
                }
                visibleCount += increment;
    
                // Hide button if no more items
                if (visibleCount >= items.length) {
                    loadMoreBtn.style.display = 'none';
                }
            });
    
            // Hide button if less than 6 items
            if (items.length <= 6) {
                loadMoreBtn.style.display = 'none';
            }
        });
    </script>
</x-app>