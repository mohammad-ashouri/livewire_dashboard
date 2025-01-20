<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Main extends Component
{
    #[Title('Dashboard | TALL Stack Admin Dashboard')]
    /**
     * Current page component
     * Default = dashboard
     * located in livewire/pages
     * @var string
     */
    public string $currentPage;

    /**
     * Breadcrumb array
     * @var array
     */
    public array $breadcrumb = [];

    /**
     * Main title of component headers
     * @var string
     */
    public string $mainHeaderTitle;

    /**
     * Show/Hide all main component title
     * @var bool
     */
    public $showContent = false;

    /**
     * Listeners
     * @var string[]
     */
    protected $listeners = [
        'changePage' => 'updatePage',
        'changeMainHeaderTitle' => 'changeMainHeaderTitle',
        'preloaderFinished' => 'showContent',
    ];

    /**
     * Change page (component) after clicking on menu
     * @param $page
     * @return void
     */
    public function updatePage($page): void
    {
        $this->showContent = false;
        $this->dispatch('triggerPreloader');
        $this->currentPage = $page;
    }

    /**
     * Show all main component contents
     * @return void
     */
    public function showContent(): void
    {
        $this->showContent = true;
    }

    /**
     * Mount component
     * @return void
     */
    public function mount(): void
    {
        $this->dispatch('triggerPreloader');
        $this->showContent();
    }

    /**
     * Change main header title
     * @param $title
     * @return void
     */
    public function changeMainHeaderTitle($title): void
    {
        $this->mainHeaderTitle = $title;
    }
}
