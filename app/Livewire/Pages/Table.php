<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Table extends Component
{
    public string $mainHeaderTitle;

    public function mount()
    {
        $this->mainHeaderTitle = 'Table';
    }
}
