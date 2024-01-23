<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $category = new Category();

        // $category->nom = "Fims";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Séries TV";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Musiques";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Jeux Vidéos";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Sports";
        // $category->is_online = 1;
        // $category->save();

        $category = new Category();
        $category->nom = "Les goonies";
        $category->is_online = 1;
        $category->parent_id= 1;
        $category->save();

        $category1 = new Category();
        $category1->nom = "Les superwomen";
        $category1->is_online = 1;
        $category1->parent_id= 2;
        $category1->save();

        $category2 = new Category();
        $category2->nom = "Les supermen";
        $category2->is_online = 1;
        $category2->parent_id= 2;
        $category2->save();

        $category3 = new Category();
        $category3->nom = "Les superheros";
        $category3->is_online = 1;
        $category3->parent_id= 3;
        $category3->save();

        $category0 = new Category();
        $category0->nom = "Les superhumains";
        $category0->is_online = 1;
        $category0->parent_id= 3;
        $category0->save();

        $category4 = new Category();
        $category4->nom = "Les Rock start";
        $category4->is_online = 1;
        $category4->parent_id= 4;
        $category4->save();

        $category5 = new Category();
        $category5->nom = "GTA";
        $category5->is_online = 1;
        $category5->parent_id= 5;
        $category5->save();


    }
}
