<?php

namespace App\Http\Livewire\Storefront\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminProfile extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $passwordCheck;

    protected $rules = [
        'password' => 'required|unique:users|confirmed',
        'passwordCheck' => 'required',
    ];

    public function changeName()
    {
        User::update([
            'name' => $this->name
        ]);

    }

    public function changePass()
    {
        $this->dispatchBrowserEvent('change-password-check-open');
    }

    public function changePassCheck()
    {
        $this->validateOnly('passwordCheck');

        if (Hash::check($this->passwordCheck, auth()->user()->password)) {
            $this->dispatchBrowserEvent('change-password-check-close');
            $this->dispatchBrowserEvent('change-password-view-open');
        }

        $this->addError('passwordCheck', trans('auth.password'));

    }

    public function changePassView()
    {

    }

    public function changePassAction()
    {
        $this->validateOnly('password');
//        $user = User::find(auth()->id());
        auth()->user()->update([
            'password' => $this->password
        ]);

    }

    public function updated()
    {
        $this->validate();
    }

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function render()
    {
        return view('livewire.storefront.backend.admin-profile')
            ->extends('layouts.storeBackend');
    }
}
