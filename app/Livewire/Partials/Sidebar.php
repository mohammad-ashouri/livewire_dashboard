<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    /**
     * Toggle sidebar
     * @var bool
     */
    public bool $sidebarToggle = false;
    /**
     * Current page (component)
     * @var string
     */
    public string $currentPage;

    /**
     * Change page (component) after clicking on menu (listeners)
     * @param $currentPage
     * @return void
     */
    public function changePage($currentPage): void
    {
        $this->currentPage = $currentPage;
        $this->dispatch('changePage', $currentPage);
        $this->dispatch('changeMainHeaderTitle', $currentPage);
        //This listener is in app.js
        $this->dispatch('updateTitle', $currentPage . ' | TALL Stack Admin Dashboard');
    }

    protected $listeners = [
        'toggleSidebarOn' => 'toggleSidebarOn',
    ];

    public function toggleSidebar(): void
    {
        $this->sidebarToggle = !$this->sidebarToggle;
        $this->dispatch('toggleSidebarOff', $this->sidebarToggle);
    }
    public function toggleSidebarOn(): void
    {
        $this->sidebarToggle = !$this->sidebarToggle;
    }

    public function mount(): void
    {
        $this->currentPage = 'Dashboard';
    }
}
