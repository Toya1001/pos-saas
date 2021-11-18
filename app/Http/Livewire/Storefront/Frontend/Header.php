<?php

namespace App\Http\Livewire\Storefront\Frontend;

use App\Models\Store;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Header extends Component
{

    protected $listeners = ['loadStore','render'];

    public function render()
    {
        $request = Request::segments(1);

        return view('livewire.storefront.frontend.header',[
            'storeInfos' => Store::with('banner')->where('name',$request[0])->first(),
        ])
            ->extends('layouts.storeFrontend');
    }
}
