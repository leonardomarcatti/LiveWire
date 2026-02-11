<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{

    public string $name;
    public int $age;
    public float $height;

    public function render()
    {
        return view('livewire.user');
    }
}
