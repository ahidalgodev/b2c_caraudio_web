<x-layouts.app title="B2C Car Audio">
    
    <x-navbar />
    <x-hero-slider />

    <!-- Catálogo -->
    <main class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-semibold mb-6">Nuestros Productos</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
            
            @foreach ($products as $product)
                <div class="bg-neutral-800 rounded-xl overflow-hidden border-l-4 border-yellow-400 md:border-l-0 hover:bg-neutral-700 md:hover:bg-neutral-800 md:hover:shadow-yellow-400/20 md:shadow-lg transition-all duration-300">
                    <div class="flex md:block">
                        <div class="relative flex-shrink-0">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-28 h-28 md:w-full md:h-auto md:aspect-square object-cover">
                            <span class="hidden md:block absolute top-2 left-2 bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded">NUEVO</span>
                        </div>
                        <div class="p-3 md:p-4 flex flex-col justify-center md:block">
                            <span class="text-xs text-gray-400">{{ $product->category }}</span>
                            <h3 class="text-sm md:text-lg font-semibold mt-1">{{ $product->name }}</h3>
                            <p class="hidden md:block text-gray-400 text-sm mt-2">{{ $product->description }}</p>
                            <div class="flex justify-between items-center mt-2 md:mt-4">
                                <p class="text-lg md:text-xl font-bold text-white">${{ number_format($product->price, 0, ',', '.') }}</p>
                                <button class="hidden md:block bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">Ver más</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

</x-layouts.app>