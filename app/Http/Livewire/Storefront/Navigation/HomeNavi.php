<?php

namespace App\Http\Livewire\Storefront\Navigation;

use App\Models\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HomeNavi extends Component
{
    public function render()
    {
        $request = Request::segments(1);

        return view('livewire.storefront.navigation.home-navi',[
            'storeInfos' => Store::with('banner')->where('name',$request[0])->first(),
        ])

            ->extends('layouts.storeFrontend');
    }

    public function logout()
    {
        Session::forget('storeID');

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('index');
    }
}
