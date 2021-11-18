<?php

namespace App\Http\Livewire\Storefront\Frontend;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    protected $listeners = ['loadStore' => 'render'];

    public function render()
    {
        return view('livewire.storefront.frontend.products',[
            'products' => Product::where('store_id',session('storeID'))->get(),
        ]);
    }
}
