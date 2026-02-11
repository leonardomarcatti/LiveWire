<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $number = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function updateValue(string $type): void
    {
        if ($type == '+') {
            $this->number++;
            return;
        }

        if ($type == '-') {
            $this->number--;
        }

        return;
    }
}
