<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('Hotel Dashboard')]
    public function render()
    {
        return view('livewire.dashboard');
    }
}