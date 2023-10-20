<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();
        $faker = Faker::create();
        $author_id = Author::all()->pluck('id')->toArray();
        for($i = 0 ; $i < 50 ; $i++) {
            Book::create([
                'author_id' => $faker->randomElement($author_id),
                'title' => $faker->sentence(5),
            ]);
        }
    }
}
