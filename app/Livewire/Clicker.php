<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    public $username = "TestUser";

    public function createNewUser(){
        User::create([
            'name' => "Test User",
            "email"=>"test@example.com",
            "password"=>"1223454545"]);
    }

    public function render()
    {
        $title = "Test";
        $users = User::all();
        return view('livewire.clicker', ['title' => $title, 'users' => $users]);
    }
}
