<?php

namespace App\Http\Livewire\Storefront\Frontend;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    protected $listeners = ['loadStore' => 'render'];

    public int $paginator = 9;
    public bool $more = true;

    public Product $product;

    public function seeMoreStore(): void
    {
        $this->paginator += 6;

        $count = Product::count();

        if ($this->paginator >= $count) {
            $this->more = false;
        }

        $this->resetPage();

    }

    public function mount()
    {
        $this->product = new Product();
    }

    public function render()
    {
        return view('livewire.storefront.frontend.products',[
            'products' => Product::where('store_id',session('storeID'))
                ->paginate($this->paginator),
        ]);
    }
}
