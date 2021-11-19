<?php

namespace App\Http\Livewire\Navigation\Home;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexNavi extends Component
{
    public function render()
    {
        return view('livewire.navigation.home.index-navi');
    }

}
