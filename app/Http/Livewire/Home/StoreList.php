<?php

namespace App\Http\Livewire\Home;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class StoreList extends Component
{
    use WithPagination;

    public int $paginator = 3;
    public bool $more = true;

    public Store $store;

    public function seeMoreStore(): void
    {
        $this->paginator += 3;

        $count = Store::count();

        if ($this->paginator >= $count) {
            $this->more = false;
        }

        $this->resetPage();

    }

    public function loadStore(Store $store)
    {
        $this->store = $store;

        session()->put('storeID', $this->store->id);

        return redirect()->route('storefront', $store->name);
    }

    public function mount()
    {
        $this->store = new Store;
    }

    public function render()
    {
        return view('livewire.home.store-list', [
            'stores' => Store::orderBy('created_at','desc')->paginate($this->paginator),
        ]);
    }
}
