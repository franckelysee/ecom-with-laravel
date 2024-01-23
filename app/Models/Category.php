<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\Configuration\Merger;

class Category extends Model
{
    use HasFactory;


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    //recuperer des produits situés dans une catégorie enfant au travers d'une catégorie parent
    public function produitsEnfant()
    {
        return $this->hasManyThrough(Produit::class, Category::class, 'parent_id', 'category_id');
        // $this->load('children.produits');
        // return $this->children->flatMap(function ($category) {
        //     return $category->produits;
        // });
    }

    public function produitsParent()
    {
        return $this->hasMany(Produit::class);
    }

    public function produits()
    {
        $produits = $this->produitsParent()->get()->merge($this->produitsEnfant());
        return $produits;
    }

}
