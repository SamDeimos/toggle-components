<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainToggle extends Component
{
    public $toggle = 'create';

    public function changeToggle()
    {
        if($this->toggle == 'create'){
            $this->toggle = 'edit';
        }else{
            $this->toggle = 'create';
        }
        $this->dispatchBrowserEvent('clearcomponent');
    }
    public function render()
    {
        return view('livewire.main-toggle');
    }
}
