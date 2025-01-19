<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
    /**
     * Dark mode with default status
     * @var bool
     */
    public bool $darkMode = false;

    /**
     * User profile dropdown with default status
     * @var bool
     */
    public bool $userDropdownOpen = false;
    /**
     * Toggle sidebar with default status
     * @var bool
     */
    public bool $sidebarToggle = false;

    /**
     * Toggle dark/light mode and send an event for app.js listener to change dark/light mode
     * @return void
     */
    public function toggleDarkMode(): void
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Toggle user drop down
     * @return void
     */
    public function toggleUserDropdown(): void
    {
        $this->userDropdownOpen = !$this->userDropdownOpen;
    }

    /**
     * Listeners
     * @var string[]
     */
    protected $listeners = [
        'toggleSidebarOff' => 'toggleSidebarOff',
    ];

    /**
     * Toggle sidebar and send an event for sidebar component for change sidebarToggle status
     * @return void
     */
    public function toggleSidebar(): void
    {
        $this->sidebarToggle = !$this->sidebarToggle;
        $this->dispatch('toggleSidebarOn', $this->sidebarToggle);
    }

    /**
     * Toggle sidebar after sidebar sent the event (this run with listener)
     * @return void
     */
    public function toggleSidebarOff()
    {
        $this->sidebarToggle = !$this->sidebarToggle;
    }

}
