<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class GaleryComponent extends Component
{
    use WithPagination;


    public function render()
    {
        $products = Product::paginate(18);
        return view('livewire.galery-component',['products'=>$products]);
    }
}
