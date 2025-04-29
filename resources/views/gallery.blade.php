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
        <h1 class="z-10 pt-8 text-left text-4xl md:text-6xl font-bold">GALERI KAMI</h1>
    </section>

    <!-- Carousel Section -->
  <div class="py-12 px-4 md:px-20">
    <div class="relative">
        <!-- Image Carousel -->
        <div class="overflow-hidden rounded-xl shadow-lg">
            <div class="carousel-images relative">
                @foreach ($carousel as $key => $carouselImage) <!-- Loop through the 5 latest galleries -->
                    <img src="{{ asset('storage/' . $carouselImage->image) }}" 
                        class="w-full object-cover max-h-96 carousel-item {{ $key === 0 ? 'block' : 'hidden' }}" 
                        alt="carousel image">
                @endforeach
            </div>
        </div>

        <!-- Prev Button -->
        <button id="prev-btn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Next Button -->
        <button id="next-btn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
  </div>

  <!-- Gallery Grid -->
  <div class="px-4 md:px-20 pb-20">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4" id="gallery-grid">
        @foreach ($galleries->take(8) as $gallery)  <!-- Show only first 8 initially -->
            <div class="w-full aspect-square overflow-hidden rounded-xl gallery-item">
                <img src="{{ asset('storage/' . $gallery->image) }}" class="w-full h-full object-cover" alt="gallery" />
            </div>
        @endforeach
    </div>

    <button id="load-more-gallery" class="bg-black py-2 px-8 sm:px-10 lg:px-12 my-6 sm:my-8 lg:my-10 xl:my-12 block mx-auto text-white hover:bg-gray-800 text-xs sm:text-sm lg:text-base">
        LIHAT LEBIH BANYAK
    </button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const loadMoreBtn = document.getElementById('load-more-gallery');
        let loadedItems = 8;  // Start with 8 images
        const galleries = @json($galleries->all());  // Pass the galleries data to JS
        const galleryGrid = document.getElementById('gallery-grid');

        loadMoreBtn.addEventListener('click', function () {
            // Load next 8 items
            const nextItems = galleries.slice(loadedItems, loadedItems + 8);
            nextItems.forEach(gallery => {
                const galleryItem = document.createElement('div');
                galleryItem.classList.add('w-full', 'aspect-square', 'overflow-hidden', 'rounded-xl', 'gallery-item');
                galleryItem.innerHTML = `<img src="/storage/${gallery.image}" class="w-full h-full object-cover" alt="gallery" />`;
                galleryGrid.appendChild(galleryItem);
            });

            // Update the loadedItems count
            loadedItems += 8;

            // Hide the button if no more items to load
            if (loadedItems >= galleries.length) {
                loadMoreBtn.style.display = 'none';
            }
        });

        // Hide the button if all items are already loaded
        if (loadedItems >= galleries.length) {
            loadMoreBtn.style.display = 'none';
        }

        // Carousel functionality
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function showCarouselImage(index) {
            // Hide all images
            carouselItems.forEach(item => item.classList.add('hidden'));
            // Show the current image
            carouselItems[index].classList.remove('hidden');
        }

        nextBtn.addEventListener('click', function () {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            showCarouselImage(currentIndex);
        });

        prevBtn.addEventListener('click', function () {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showCarouselImage(currentIndex);
        });

        // Initialize carousel with the first image visible
        showCarouselImage(currentIndex);
    });
  </script>
</x-app>