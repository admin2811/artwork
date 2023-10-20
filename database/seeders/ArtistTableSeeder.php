<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Artwork; 

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ trong bảng artworks
        DB::table('artworks')->delete();
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Artwork::create([ // Thay vì Artist::create, sử dụng Artwork::create
                'artist_name' => $faker->name,
                'description' => $faker->text,
                'art_type' => $faker->randomElement(['hội họa', 'âm nhạc', 'văn học']),
                'media_link' => $faker->url,
                'cover_image' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
