<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $sidebarToggle = true;
    public $currentPage = 'dashboard';

    public function changePage($currentPage)
    {
        $this->currentPage = $currentPage;
        $this->dispatch('changePage', $currentPage);
        $this->dispatch('updateTitle', $currentPage . ' | TALL Stack Admin Dashboard');
    }

    public function toggleSidebar()
    {
        $this->sidebarToggle = !$this->sidebarToggle;
    }

}
