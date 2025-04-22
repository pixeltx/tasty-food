<x-app>
    <section class="py-16 px-4 md:px-20 bg-white">
        <h1 class="text-4xl font-bold mb-6">{{ $blog->title }}</h1>
        <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-80 object-cover rounded-xl mb-6 shadow" />
        <div class="prose max-w-none text-gray-800">
            {!! $blog->content !!}
        </div>
    </section>
</x-app>