<x-app>
    {{-- Navbar --}}
    <nav class="absolute top-10 left-0 w-full z-50 py-6 px-12">
        <div class="container mx-auto flex items-center justify-start">
            <!-- Logo -->
            <a href="#" class="text-3xl font-extrabold text-black mr-20">TASTY FOOD</a>
    
            <!-- Desktop Menu (Aligned Left & Bigger) -->
            <ul class="hidden md:flex space-x-14 text-xl">
                <li><a href="/" class="text-gray-700 hover:text-black font-semibold">HOME</a></li>
                <li><a href="/about" class="text-gray-700 hover:text-black font-semibold">TENTANG</a></li>
                <li><a href="/blog" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                <li><a href="/gallery" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                <li><a href="/contact" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
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
                    <li><a href="/blog" class="text-gray-700 hover:text-black font-semibold">BERITA</a></li>
                    <li><a href="/gallery" class="text-gray-700 hover:text-black font-semibold">GALERI</a></li>
                    <li><a href="/contact" class="text-gray-700 hover:text-black font-semibold">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="relative w-full h-screen min-h-[105vh] flex items-center bg-gray-100">
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
    
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Big News Card -->
                @if ($blogs->isNotEmpty())
                    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col min-h-[700px] max-h-[700px]">
                        <img src="{{ asset('storage/' . $blogs->first()->image) }}" alt="{{ $blogs->first()->title }}" class="w-full h-96 object-cover">
                        <div class="p-6 flex flex-col flex-grow justify-between">
                            <div>
                                <h3 class="font-semibold text-2xl">{{ $blogs->first()->title }}</h3>
                                <p class="text-gray-600 text-sm mt-2">
                                    {!! Str::limit(preg_replace('/<(hr|u)[^>]*>/', '', $blogs->first()->content), 150) !!}
                                </p>
                            </div>
    
                            <div class="flex items-center mt-6 space-x-4 justify-between">
                                <a href="#" class="text-yellow-300 font-bold no-underline">Baca selengkapnya</a>
                                <a href="/blog" class="flex space-x-2">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
    
                <!-- Right Side: 4 Small News Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($blogs->skip(1) as $blog)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col min-h-[350px] max-h-[350px]">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover">
                            <div class="p-4 flex flex-col flex-grow justify-between">
                                <div>
                                    <h3 class="font-semibold text-lg">{{ $blog->title }}</h3>
                                    <p class="text-gray-600 text-sm mt-2">
                                        {!! Str::limit(preg_replace('/<(hr|u)[^>]*>/', '', $blog->content), 75) !!}
                                    </p>
                                </div>
    
                                <div class="flex items-center mt-4 space-x-4 justify-between">
                                    <a href="#" class="text-yellow-300 font-bold no-underline">Baca selengkapnya</a>
                                    <a href="/blog" class="flex space-x-2">
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
    <section class="py-10 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6">Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($galleries as $gallery)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallery Image" class="w-full h-64 object-cover">
                    </div>
                @endforeach
            </div>

            <button class="bg-black py-2 px-12 my-12 block mx-auto text-white hover:bg-gray-800">
                LIHAT LEBIH BANYAK
            </button>
        </div>
    </section>
</x-app>

