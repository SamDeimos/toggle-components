<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.create');
    }
}
