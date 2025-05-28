<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads;
    public $file;

    public function send()
    {
        $path = $this->file->store('public/uploads/Documents/' . 1);
    }
}
