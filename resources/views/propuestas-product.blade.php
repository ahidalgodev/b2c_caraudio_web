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

    <!-- PROPUESTA 1: Clásica lado a lado -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 1: Clásica (Imagen izquierda, Info derecha)</p>
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Galería de imágenes -->
                <div>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full aspect-square object-cover rounded-xl">
                    <!-- Miniaturas -->
                    <div class="flex gap-2 mt-4">
                        <img src="{{ $product->image }}" class="w-20 h-20 object-cover rounded-lg border-2 border-yellow-400 cursor-pointer">
                        <img src="https://picsum.photos/400/400?random=20" class="w-20 h-20 object-cover rounded-lg border-2 border-transparent hover:border-yellow-400 cursor-pointer">
                        <img src="https://picsum.photos/400/400?random=21" class="w-20 h-20 object-cover rounded-lg border-2 border-transparent hover:border-yellow-400 cursor-pointer">
                    </div>
                </div>
                <!-- Información -->
                <div>
                    <span class="text-yellow-400 text-sm uppercase tracking-wider">{{ $product->category }}</span>
                    <h1 class="text-3xl font-bold mt-2">{{ $product->name }}</h1>
                    <p class="text-gray-400 mt-4">{{ $product->description }}</p>
                    <p class="text-4xl font-bold text-yellow-400 mt-6">${{ number_format($product->price, 0, ',', '.') }}</p>
                    
                    <div class="mt-8 space-y-4">
                        <button class="w-full bg-yellow-400 text-black py-4 rounded-xl font-bold text-lg hover:bg-yellow-300 transition">
                            Hacer Pedido por WhatsApp
                        </button>
                        <button class="w-full border border-yellow-400 text-yellow-400 py-4 rounded-xl font-bold text-lg hover:bg-yellow-400 hover:text-black transition">
                            Agregar a Favoritos
                        </button>
                    </div>

                    <!-- Info adicional -->
                    <div class="mt-8 border-t border-neutral-700 pt-6">
                        <h3 class="font-semibold mb-3">Características:</h3>
                        <ul class="text-gray-400 space-y-2">
                            <li>✓ Garantía de 12 meses</li>
                            <li>✓ Envío a toda Colombia</li>
                            <li>✓ Instalación disponible</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 2: Imagen grande con info abajo -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 2: Imagen Grande Arriba</p>
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <!-- Imagen principal -->
                <div class="relative">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full aspect-video object-cover rounded-xl">
                    <span class="absolute top-4 left-4 bg-yellow-400 text-black text-sm font-bold px-3 py-1 rounded">{{ $product->category }}</span>
                </div>
                
                <!-- Miniaturas -->
                <div class="flex gap-2 mt-4 justify-center">
                    <img src="{{ $product->image }}" class="w-16 h-16 object-cover rounded-lg border-2 border-yellow-400 cursor-pointer">
                    <img src="https://picsum.photos/400/400?random=22" class="w-16 h-16 object-cover rounded-lg border-2 border-transparent hover:border-yellow-400 cursor-pointer">
                    <img src="https://picsum.photos/400/400?random=23" class="w-16 h-16 object-cover rounded-lg border-2 border-transparent hover:border-yellow-400 cursor-pointer">
                    <img src="https://picsum.photos/400/400?random=24" class="w-16 h-16 object-cover rounded-lg border-2 border-transparent hover:border-yellow-400 cursor-pointer">
                </div>

                <!-- Info centrada -->
                <div class="text-center mt-8">
                    <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
                    <p class="text-gray-400 mt-4 max-w-2xl mx-auto">{{ $product->description }}</p>
                    <p class="text-5xl font-bold text-yellow-400 mt-6">${{ number_format($product->price, 0, ',', '.') }}</p>
                    
                    <div class="mt-8 flex gap-4 justify-center">
                        <button class="bg-yellow-400 text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-yellow-300 transition">
                            Hacer Pedido por WhatsApp
                        </button>
                        <button class="border border-neutral-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:border-yellow-400 transition">
                            ❤️ Favoritos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 3: Estilo Tarjeta Compacta -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 3: Tarjeta Compacta</p>
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-2xl mx-auto bg-neutral-800 rounded-2xl overflow-hidden">
                <!-- Imagen -->
                <div class="relative">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full aspect-square object-cover">
                    <div class="absolute bottom-4 left-4 right-4 flex gap-2">
                        <div class="w-12 h-12 rounded-lg bg-white/20 backdrop-blur border-2 border-white cursor-pointer"></div>
                        <div class="w-12 h-12 rounded-lg bg-white/20 backdrop-blur border-2 border-transparent hover:border-white cursor-pointer"></div>
                        <div class="w-12 h-12 rounded-lg bg-white/20 backdrop-blur border-2 border-transparent hover:border-white cursor-pointer"></div>
                    </div>
                </div>
                
                <!-- Info -->
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <span class="text-yellow-400 text-sm">{{ $product->category }}</span>
                            <h1 class="text-2xl font-bold mt-1">{{ $product->name }}</h1>
                        </div>
                        <p class="text-2xl font-bold text-yellow-400">${{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                    <p class="text-gray-400 mt-4">{{ $product->description }}</p>
                    
                    <button class="w-full bg-yellow-400 text-black py-4 rounded-xl font-bold text-lg hover:bg-yellow-300 transition mt-6">
                        Pedir por WhatsApp
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROPUESTA 4: Con tabs de información -->
    <section class="mb-16">
        <p class="bg-yellow-400 text-black text-center py-2 font-bold">PROPUESTA 4: Con Tabs de Información</p>
        <div class="container mx-auto px-4 py-8" x-data="{ activeTab: 'descripcion' }">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Galería -->
                <div x-data="{ activeImage: '{{ $product->image }}' }">
                    <img :src="activeImage" alt="{{ $product->name }}" class="w-full aspect-square object-cover rounded-xl">
                    <div class="flex gap-2 mt-4">
                        <img @click="activeImage = '{{ $product->image }}'" src="{{ $product->image }}" class="w-20 h-20 object-cover rounded-lg cursor-pointer hover:opacity-80">
                        <img @click="activeImage = 'https://picsum.photos/400/400?random=25'" src="https://picsum.photos/400/400?random=25" class="w-20 h-20 object-cover rounded-lg cursor-pointer hover:opacity-80">
                        <img @click="activeImage = 'https://picsum.photos/400/400?random=26'" src="https://picsum.photos/400/400?random=26" class="w-20 h-20 object-cover rounded-lg cursor-pointer hover:opacity-80">
                    </div>
                </div>

                <!-- Info con tabs -->
                <div>
                    <span class="text-yellow-400 text-sm uppercase">{{ $product->category }}</span>
                    <h1 class="text-3xl font-bold mt-2">{{ $product->name }}</h1>
                    <p class="text-4xl font-bold text-yellow-400 mt-4">${{ number_format($product->price, 0, ',', '.') }}</p>
                    
                    <button class="w-full bg-yellow-400 text-black py-4 rounded-xl font-bold text-lg hover:bg-yellow-300 transition mt-6">
                        Pedir por WhatsApp
                    </button>

                    <!-- Tabs -->
                    <div class="mt-8 border-t border-neutral-700">
                        <div class="flex gap-4 mt-4">
                            <button @click="activeTab = 'descripcion'" :class="activeTab === 'descripcion' ? 'text-yellow-400 border-b-2 border-yellow-400' : 'text-gray-400'" class="pb-2">Descripción</button>
                            <button @click="activeTab = 'especificaciones'" :class="activeTab === 'especificaciones' ? 'text-yellow-400 border-b-2 border-yellow-400' : 'text-gray-400'" class="pb-2">Especificaciones</button>
                            <button @click="activeTab = 'envio'" :class="activeTab === 'envio' ? 'text-yellow-400 border-b-2 border-yellow-400' : 'text-gray-400'" class="pb-2">Envío</button>
                        </div>
                        
                        <div class="mt-4 text-gray-400">
                            <div x-show="activeTab === 'descripcion'">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div x-show="activeTab === 'especificaciones'">
                                <ul class="space-y-2">
                                    <li>• Potencia: 1500W RMS</li>
                                    <li>• Canales: 2</li>
                                    <li>• Impedancia: 4 ohms</li>
                                </ul>
                            </div>
                            <div x-show="activeTab === 'envio'">
                                <p>Envío gratis a toda Colombia. Tiempo de entrega: 3-5 días hábiles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>