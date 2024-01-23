<?php
namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class HeaderComposer{

    public function compose(View $view){
        $matches = ['is_online'=>1, 'parent_id'=>null];
        $view->with("categories", Category::where($matches)->get());
    }
}
