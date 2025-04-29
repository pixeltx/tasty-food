@props(['location', 'settings'])

<footer class="bg-zinc-900 text-white py-10">
    <div class="max-w-7xl mx-auto px-4 pt-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Left Section -->
        <div>
            <h2 class="text-xl font-bold">Tasty Food</h2>
            <p class="mt-2 text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="flex space-x-4 mt-6">
                <a href="#" class="text-gray-400 hover:text-white text-2xl">
                    <i class=""><img src="{{ asset('img/001-facebook.png') }}" alt="" class="w-10 h-10"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white text-2xl">
                    <i class=""><img src="{{ asset('img/002-twitter.png') }}" alt="" class="w-10 h-10"></i>
                </a>
            </div>
        </div>

        <!-- Middle left Section -->
        <div class="flex text-white flex-col space-y-2">
            <h3 class="text-lg font-semibold">Useful Links</h3>
            <a href="/blog" class="hover:text-gray-100">Blog</a>
            <a href="#" class="hover:text-gray-100">Hewan</a>
            <a href="/gallery" class="hover:text-gray-100">Galeri</a>
            <a href="#" class="hover:text-gray-100">Testimonial</a>
        </div>

        <!-- Middle right Section -->
        <div class="flex text-white flex-col space-y-2">
            <h3 class="text-lg font-semibold">Privacy</h3>
            <a href="#" class="hover:text-gray-100">Karir</a>
            <a href="/about" class="hover:text-gray-100">Tentang Kami</a>
            <a href="/contact" class="hover:text-gray-100">Kontak Kami</a>
            <a href="#" class="hover:text-gray-100">Servis</a>
        </div>

        <!-- Right Section -->
        <div class="flex text-white flex-col space-y-2">
            <h3 class="text-lg font-semibold">Contact Info</h3>
            <a href="mailto:{{ $settings['email'] }}" class="hover:text-gray-100 flex items-center space-x-2">
                <img src="{{ asset('img/Group 66.png') }}" alt="" class="w-10 h-10">
                <p class="">{{ $settings['email'] ?? 'No Email Available'}}</p>
            </a>
            <a href="tel:{{ $settings['phone'] }}" class="hover:text-gray-100 flex items-center space-x-2">
                <img src="{{ asset('img/Group 67.png') }}" alt="" class="w-10 h-10">
                <p class="">{{ $settings['phone'] ?? 'No Phone Number Available'}}</p>
            </a>
            <a href="https://www.google.com/maps?q={{ $location->latitude }},{{ $location->longitude }}" target="_blank" class="hover:text-gray-100 flex items-center space-x-2">
                <img src="{{ asset('img/Group 68.png') }}" alt="" class="w-10 h-10">
                <p class="">{{ Str::limit($location->address, 20, '...') ?? 'No Location Available'}}</p>
            </a>
        </div>
    </div>

    <div class="mt-8 text-center pt-4">
        <p class="text-gray-500">Copyright &copy; 2025 All rights reserved</p>
    </div>
</footer>