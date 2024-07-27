<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Shoes;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory(1)->create();
        User::Create([
            'name' => 'Samuel',
            'email' => 'samuel@gmail.com',
            'password' => bcrypt('123123'),
            'role' => 1,
            'alamat' => '-',
            'no_hp' => '-',
            'tgl_lahir' => '-',
            'jenis_kelamin' => '-',
        ]);

        Category::Create([
            'name' => 'Nike'
        ]);

        Category::Create([
            'name' => 'Adidas'
        ]);

        Category::Create([
            'name' => 'Ortuseight'
        ]);

        Category::Create([
            'name' => 'Converse'
        ]);

        Category::Create([
            'name' => 'Mills'
        ]);

        Shoes::factory(1000)->create();
    }
}
