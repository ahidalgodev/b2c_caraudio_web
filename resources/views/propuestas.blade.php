<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propuestas B2C Car Audio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-900 text-white p-8">
    <h1 class="text-3xl font-bold text-yellow-400 mb-4">Propuestas de Tarjetas - B2C Car Audio</h1>
    <p class="text-gray-400 mb-8">Paleta: Negro (principal), Amarillo (acento), Blanco (texto)</p>

    <!-- PROPUESTA 1: Elegante Minimalista -->
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-4 text-yellow-400">Propuesta 1: Elegante Minimalista</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-neutral-800 rounded-lg overflow-hidden border border-neutral-700 hover:border-yellow-400 transition-all duration-300">
                <img src="https://picsum.photos/300/200?random=1" alt="Producto" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-yellow-400 uppercase tracking-wider">Amplificadores</span>
                    <h3 class="text-lg font-semibold mt-1">Amplificador Boss 1500W</h3>
                    <p class="text-gray-400 text-sm mt-2">Amplificador de alta potencia para autos</p>
                    <p class="text-2xl font-bold text-yellow-400 mt-3">$450.000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 2: Con Badge y Botón -->
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-4 text-yellow-400">Propuesta 2: Con Badge y Botón</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-neutral-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-400/20 transition-all duration-300">
                <div class="relative">
                    <img src="https://picsum.photos/300/200?random=2" alt="Producto" class="w-full h-48 object-cover">
                    <span class="absolute top-2 left-2 bg-yellow-400 text-black text-xs font-bold px-2 py-1 rounded">NUEVO</span>
                </div>
                <div class="p-4">
                    <span class="text-xs text-gray-400">Parlantes</span>
                    <h3 class="text-lg font-semibold mt-1">Parlantes Pioneer 6.5"</h3>
                    <p class="text-gray-400 text-sm mt-2">Parlantes de 2 vías con excelente sonido</p>
                    <div class="flex justify-between items-center mt-4">
                        <p class="text-xl font-bold text-white">$280.000</p>
                        <button class="bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition">Ver más</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 3: Borde Amarillo Destacado -->
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-4 text-yellow-400">Propuesta 3: Borde Amarillo Destacado</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-black rounded-lg overflow-hidden border-l-4 border-yellow-400 hover:bg-neutral-900 transition-all duration-300">
                <div class="flex">
                    <img src="https://picsum.photos/150/150?random=3" alt="Producto" class="w-32 h-32 object-cover">
                    <div class="p-4 flex flex-col justify-center">
                        <span class="text-xs text-yellow-400 uppercase">Subwoofers</span>
                        <h3 class="text-md font-semibold">Subwoofer 12" Sony</h3>
                        <p class="text-xl font-bold text-white mt-2">$520.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 4: Tarjeta con Hover Dramático -->
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-4 text-yellow-400">Propuesta 4: Hover Dramático</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="group bg-neutral-800 rounded-lg overflow-hidden relative">
                <img src="https://picsum.photos/300/200?random=4" alt="Producto" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <span class="text-xs text-yellow-400 uppercase tracking-wider">Amplificadores</span>
                    <h3 class="text-lg font-semibold">Amplificador Boss 1500W</h3>
                    <p class="text-2xl font-bold text-yellow-400 mt-2">$450.000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 5: Grid Compacto -->
    <section class="mb-12">
        <h2 class="text-xl font-semibold mb-4 text-yellow-400">Propuesta 5: Grid Compacto</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-neutral-800 rounded-lg overflow-hidden text-center hover:ring-2 hover:ring-yellow-400 transition-all">
                <img src="https://picsum.photos/200/200?random=5" alt="Producto" class="w-full h-32 object-cover">
                <div class="p-3">
                    <h3 class="text-sm font-semibold truncate">Amplificador Boss</h3>
                    <p class="text-lg font-bold text-yellow-400 mt-1">$450.000</p>
                </div>
            </div>
            <div class="bg-neutral-800 rounded-lg overflow-hidden text-center hover:ring-2 hover:ring-yellow-400 transition-all">
                <img src="https://picsum.photos/200/200?random=6" alt="Producto" class="w-full h-32 object-cover">
                <div class="p-3">
                    <h3 class="text-sm font-semibold truncate">Parlantes Pioneer</h3>
                    <p class="text-lg font-bold text-yellow-400 mt-1">$280.000</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>