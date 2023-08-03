<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public array $tasks = [];

    public function render()
    {
        return view('livewire.home-page');
    }
}
