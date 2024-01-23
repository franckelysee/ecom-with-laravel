<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Database\Seeders\ProduitsTableSeeder;
use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Contracts\View\View;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function home(){
        //select * from produits
        $produits = Produit::all();
        // $categories = Category::where("is_online",1)->get();
        // dd($produits);
        return view('shop/index', compact('produits'));
    }

    public function produit(Request $request)  {
        // dd($request->id);
        $produit = Produit::find($request->id);
        // $categories = Category::where("is_online",1)->get();
        // $produit = DB::select('select * from produits where id = ?', [$request->id]);
        // dd($produit[0]->image);
        // $produit = $produit[0];
        return view('shop/produit', compact("produit"));

    }

    public function vueCategory(Request $request){

        // $categories = Category::where("is_online",1)->get();
        // select * from produits inner join categories on produits.category_id = categories.id where produits.category_id = ?


        // $produits = DB::select('select * from produits  where category_id = ?', [$request->id]);

        // $produits = Produit::where('category_id', $request->id)->get();
        $category = Category::find($request->id);

        $produits = $category->produits();
        // $produits = DB::select("SELECT produits.*
        //     FROM produits
        //     INNER JOIN categories ON produits.category_id = categories.id
        //     WHERE categories.id=?
        // ", [$request->id]);

        // dd($produits);



        return View('shop.categorie', compact('produits', 'category'));
    }


}
