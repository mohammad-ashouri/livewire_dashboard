<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    /**
     * Toggle sidebar
     * @var bool
     */
    public bool $sidebarToggle = true;
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
        'sidebarToggled' => 'toggleSidebar',
    ];

    public function toggleSidebar($toggle): void
    {
        $this->sidebarToggle = $toggle;
    }

    public function mount(): void
    {
        $this->currentPage = 'Dashboard';
    }
}
