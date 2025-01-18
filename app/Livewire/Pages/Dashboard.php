<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    public string $mainHeaderTitle;

    public function mount()
    {
        $this->mainHeaderTitle = 'Dashboard';
    }
}
