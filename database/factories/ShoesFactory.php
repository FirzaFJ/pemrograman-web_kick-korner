<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shoes>
 */
class ShoesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_category = mt_rand(1, 5);

        if($id_category == 1) {
            $nama_sepatu= 'Nike' . ' ' . $this->faker->sentence(mt_rand(1, 1));
            // $nama_sepatu= 'Nike' . ' ' . mt_rand(100, 1000);
        } else if ($id_category == 2) {
            // $nama_sepatu= 'Adidas' . ' ' . mt_rand(100, 1000);
            $nama_sepatu= 'Adidas' . ' ' . $this->faker->sentence(mt_rand(1, 1));
        } else if ($id_category == 3) {
            $nama_sepatu= 'Ortuseight' . ' ' . $this->faker->sentence(mt_rand(1, 1));
            // $nama_sepatu= 'Ortuseight' . ' ' . mt_rand(100, 1000);
        } else if ($id_category == 4) {
            $nama_sepatu= 'Converse' . ' ' . $this->faker->sentence(mt_rand(1, 1));
            // $nama_sepatu= 'Converse' . ' ' . mt_rand(100, 1000);
        } else if ($id_category == 5) {
            $nama_sepatu= 'Mills' . ' ' . $this->faker->sentence(mt_rand(1, 1));
            // $nama_sepatu= 'Mills' . ' ' . mt_rand(100, 1000);
        }
        return [
            // 'id_category' => mt_rand(1, 5),
            'id_category' => $id_category,
            // 'nama_sepatu' => 'Sepatu' . ' ' . mt_rand(100, 1000),
            'nama_sepatu' => $nama_sepatu,
            'image1' => '-',
            'image2' => '-',
            'image3' => '-',
            'harga' => mt_rand(1500000, 5000000),
            'stok' => mt_rand(5, 30),
            'deskripsi' => $this->faker->paragraph(),
            'ukuran' => mt_rand(40, 44)
        ];
    }
}
