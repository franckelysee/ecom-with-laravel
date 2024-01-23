<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tag = new Tag();
        $tag->nom = "#humor";
        $tag->save();

        $tag2 = new Tag();
        $tag2->nom = "#sante";
        $tag2->save();

        $tag3 = new Tag();
        $tag3->nom = "#sport";
        $tag3->save();
    }
}
