<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
    // متغیرها
    public bool $darkMode = false; // حالت تاریک
    public bool $userDropdownOpen = false; // برای منوی کاربر
    public bool $sidebarToggle = true; // برای نمایش/مخفی کردن سایدبار

    /**
     * Toggle dark/light mode
     * @return void
     */
    public function toggleDarkMode(): void
    {
        $this->darkMode = !$this->darkMode;
        session(['darkMode' => $this->darkMode]);
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    // تغییر وضعیت dropdown کاربر
    public function toggleUserDropdown()
    {
        $this->userDropdownOpen = !$this->userDropdownOpen;
    }

    // تغییر وضعیت سایدبار
    public function toggleSidebar()
    {
        $this->sidebarToggle = !$this->sidebarToggle;
    }

}
