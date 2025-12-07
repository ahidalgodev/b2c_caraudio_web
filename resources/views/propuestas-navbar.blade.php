<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuestas Single Product - B2C Car Audio</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-900 text-white">

    <!-- PROPUESTA 1: Horizontal simple -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 1: Horizontal Simple</p>
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Imagen grande -->
                <div class="lg:w-1/2">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full rounded-xl">
                </div>
                <!-- Info -->
                <div class="lg:w-1/2 flex flex-col justify-center">
                    <span class="text-yellow-400 text-sm">{{ $product->category }}</span>
                    <h1 class="text-3xl font-bold mt-2">{{ $product->name }}</h1>
                    <p class="text-gray-400 mt-4">{{ $product->description }}</p>
                    <p class="text-4xl font-bold text-white mt-6">${{ number_format($product->price, 0, ',', '.') }}</p>
                    <button class="bg-yellow-400 text-black py-4 px-8 rounded-lg font-bold mt-6 hover:bg-yellow-300 transition w-fit">
                        Pedir por WhatsApp
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 2: Imagen full width -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 2: Imagen Full Width</p>
        <div class="relative">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-[500px] object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent flex items-center">
                <div class="container mx-auto px-4">
                    <div class="max-w-lg">
                        <span class="text-yellow-400 text-sm">{{ $product->category }}</span>
                        <h1 class="text-4xl font-bold mt-2">{{ $product->name }}</h1>
                        <p class="text-gray-300 mt-4">{{ $product->description }}</p>
                        <p class="text-4xl font-bold text-yellow-400 mt-6">${{ number_format($product->price, 0, ',', '.') }}</p>
                        <button class="bg-yellow-400 text-black py-4 px-8 rounded-lg font-bold mt-6 hover:bg-yellow-300 transition">
                            Pedir por WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 3: Estilo Amazon horizontal -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 3: Estilo Amazon</p>
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Miniaturas izquierda -->
                <div class="flex lg:flex-col gap-2 order-2 lg:order-1">
                    <img src="{{ $product->image }}" class="w-16 h-16 object-cover rounded border-2 border-yellow-400 cursor-pointer">
                    <img src="https://picsum.photos/400/400?random=30" class="w-16 h-16 object-cover rounded border-2 border-neutral-700 hover:border-yellow-400 cursor-pointer">
                    <img src="https://picsum.photos/400/400?random=31" class="w-16 h-16 object-cover rounded border-2 border-neutral-700 hover:border-yellow-400 cursor-pointer">
                </div>
                <!-- Imagen principal -->
                <div class="lg:w-2/5 order-1 lg:order-2">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full rounded-lg">
                </div>
                <!-- Info -->
                <div class="lg:w-2/5 order-3">
                    <span class="text-yellow-400 text-sm">{{ $product->category }}</span>
                    <h1 class="text-2xl font-bold mt-1">{{ $product->name }}</h1>
                    <p class="text-gray-400 mt-3 text-sm">{{ $product->description }}</p>
                    <div class="border-t border-neutral-700 mt-4 pt-4">
                        <p class="text-3xl font-bold">${{ number_format($product->price, 0, ',', '.') }}</p>
                        <p class="text-green-500 text-sm mt-1">En stock</p>
                    </div>
                    <button class="w-full bg-yellow-400 text-black py-3 rounded-lg font-bold mt-4 hover:bg-yellow-300 transition">
                        Pedir por WhatsApp
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 4: Minimalista horizontal -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 4: Minimalista</p>
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Imagen -->
                <div class="lg:w-1/2">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full max-w-md mx-auto">
                </div>
                <!-- Info minimalista -->
                <div class="lg:w-1/2">
                    <h1 class="text-4xl font-bold">{{ $product->name }}</h1>
                    <p class="text-3xl text-yellow-400 mt-4">${{ number_format($product->price, 0, ',', '.') }}</p>
                    <button class="bg-yellow-400 text-black py-4 px-12 rounded-lg font-bold mt-8 hover:bg-yellow-300 transition">
                        Comprar
                    </button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>