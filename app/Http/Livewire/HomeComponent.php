<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\HomeSlider;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class HomeComponent extends Component
{
    use WithPagination;


    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('succes_message','Item added in Cart');
        return redirect()->route('shop.cart'); 
    }

    public function AddToWishList($product_id, $product_name, $product_price){
        // Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        $this->emitTo('wish-list-icon-component','refreshComponent');
    }

    public function removeFromWishList($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-icon-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $products = Product::paginate(8);
        $slides = HomeSlider::where('status',1)->get();
        return view('livewire.home-component',['slides'=>$slides, 'products'=>$products]);
    }
}
