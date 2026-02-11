<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public string $name = 'Fulano(a)';
    public string $newValue = '';
    public string $color = 'white';


    public function render()
    {
        return view('livewire.hello-world');
    }

    public function updateName(): void
    {
        $this->name = $this->newValue;
    }
}
