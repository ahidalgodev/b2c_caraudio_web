<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Amplificador Boss 1500W',
            'description' => 'Amplificador de alta potencia para autos',
            'price' => 450000,
            'category' => 'Amplificadores',
            'image' => 'https://picsum.photos/400/400?random=1',
        ]);

        Product::create([
            'name' => 'Parlantes Pioneer 6.5"',
            'description' => 'Parlantes de 2 vías con excelente sonido',
            'price' => 280000,
            'category' => 'Parlantes',
            'image' => 'https://picsum.photos/400/400?random=2',
        ]);

        Product::create([
            'name' => 'Subwoofer 12" Sony',
            'description' => 'Subwoofer de graves profundos',
            'price' => 520000,
            'category' => 'Subwoofers',
            'image' => 'https://picsum.photos/400/400?random=3',
        ]);

        Product::create([
            'name' => 'Radio Android 9" Touch',
            'description' => 'Pantalla táctil con GPS y Bluetooth',
            'price' => 680000,
            'category' => 'Radios',
            'image' => 'https://picsum.photos/400/400?random=4',
        ]);

        Product::create([
            'name' => 'Kit de Cables 8 AWG',
            'description' => 'Kit completo de instalación para amplificador',
            'price' => 95000,
            'category' => 'Accesorios',
            'image' => 'https://picsum.photos/400/400?random=5',
        ]);

        Product::create([
            'name' => 'Tweeter Bala JBL',
            'description' => 'Par de tweeters de alta frecuencia',
            'price' => 120000,
            'category' => 'Parlantes',
            'image' => 'https://picsum.photos/400/400?random=6',
        ]);

        Product::create([
            'name' => 'Cera Pulidora 3M',
            'description' => 'Cera profesional para acabado espejo',
            'price' => 45000,
            'category' => 'Limpieza',
            'image' => 'https://picsum.photos/400/400?random=7',
        ]);

        Product::create([
            'name' => 'Amplificador Taramps HD3000',
            'description' => 'Amplificador monoblock 3000W RMS',
            'price' => 890000,
            'category' => 'Amplificadores',
            'image' => 'https://picsum.photos/400/400?random=8',
        ]);
    }
}