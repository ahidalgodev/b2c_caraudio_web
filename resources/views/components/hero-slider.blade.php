<div class="relative overflow-hidden" x-data="{ 
    currentSlide: 0,
    totalSlides: 3,
    autoplay: null,
    startAutoplay() {
        this.autoplay = setInterval(() => {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        }, 5000);
    },
    goToSlide(index) {
        this.currentSlide = index;
        clearInterval(this.autoplay);
        this.startAutoplay();
    }
}" x-init="startAutoplay()">
    
    <!-- Slides -->
    <div class="flex transition-transform duration-500 ease-in-out" :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
        
        <!-- Slide 1: Audio de auto -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&h=600&fit=crop" alt="Audio para autos" class="w-full h-64 md:h-96 lg:h-[500px] object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Amplificadores Boss</h2>
                    <p class="text-lg md:text-xl text-gray-200 mb-6">Potencia y calidad para tu auto</p>
                    <a href="#" class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Ver ofertas</a>
                </div>
            </div>
        </div>

        <!-- Slide 2: Parlantes -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=1920&h=600&fit=crop" alt="Parlantes y sonido" class="w-full h-64 md:h-96 lg:h-[500px] object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Subwoofers Sony</h2>
                    <p class="text-lg md:text-xl text-gray-200 mb-6">Graves profundos que se sienten</p>
                    <a href="#" class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Comprar ahora</a>
                </div>
            </div>
        </div>

        <!-- Slide 3: Ambiente musical -->
        <div class="w-full flex-shrink-0 relative">
            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=1920&h=600&fit=crop" alt="Experiencia musical" class="w-full h-64 md:h-96 lg:h-[500px] object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Productos de Limpieza</h2>
                    <p class="text-lg md:text-xl text-gray-200 mb-6">Mantén tu auto impecable</p>
                    <a href="#" class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Explorar</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Flechas de navegación -->
    <button @click="goToSlide((currentSlide - 1 + totalSlides) % totalSlides)" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>
    <button @click="goToSlide((currentSlide + 1) % totalSlides)" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </button>

    <!-- Puntos indicadores -->
    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
        <template x-for="i in totalSlides" :key="i">
            <button @click="goToSlide(i - 1)" :class="currentSlide === (i - 1) ? 'bg-yellow-400' : 'bg-white/50'" class="w-3 h-3 rounded-full transition"></button>
        </template>
    </div>

</div>