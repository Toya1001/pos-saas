<?php

namespace App\Http\Livewire\Storefront\Frontend;

use App\Models\Store;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $request = Request::segments(1);

        return view('livewire.storefront.frontend.footer',[
            'storeInfo' => Store::with('banner','contact')->where('name',$request[0])->first(),
        ]);
    }
}
