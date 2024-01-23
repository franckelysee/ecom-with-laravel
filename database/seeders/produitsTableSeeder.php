<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $produits = new Produit();
        $produits->nom = "T-shirt Goonies";
        $produits->description = "T-shirt de l'équipe Goonies";
        $produits->prix = 10.99;
        $produits->image = "goonies.jpg";
        $produits->category_id = 1;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt happy";
        $produits->description = "T-shirt rend la vie";
        $produits->prix = 25;
        $produits->image = "happy.jpg";
        $produits->category_id = 4;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt hulk";
        $produits->description = "T-shirt de hulk";
        $produits->prix = 19;
        $produits->image = "hulk.jpg";
        $produits->category_id = 3;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt simpson";
        $produits->description = "T-shirt  de simpson";
        $produits->prix = 15;
        $produits->image = "krusty_simpsons.jpg";
        $produits->category_id = 2;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt sunshine";
        $produits->description = "T-shirt de fan de sunshine";
        $produits->prix = 17.5;
        $produits->image = "little_miss_sunshine.jpg";
        $produits->category_id = 4;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt simpsons";
        $produits->description = "T-shirt de l'équipe opera";
        $produits->prix = 33;
        $produits->image = "simpsons.jpg";
        $produits->category_id = 5;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt basket";
        $produits->description = "T-shirt de l'équipe basket";
        $produits->prix = 29;
        $produits->image = "star_trek_kirk.jpg";
        $produits->category_id = 1;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt hockey";
        $produits->description = "T-shirt de l'équipe hockey";
        $produits->prix = 8;
        $produits->image = "super_man.jpg";
        $produits->category_id = 2;
        $produits->save();

        $produits = new Produit();
        $produits->nom = "T-shirt Marvel";
        $produits->description = "T-shirt de l'équipe hockey";
        $produits->prix = 9.12;
        $produits->image = "wonder_woman.jpg";
        $produits->category_id = 5;
        $produits->save();
    }
}
