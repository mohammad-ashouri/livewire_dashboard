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
     * Listeners
     * @var string[]
     */
    protected $listeners = [
        'changePage' => 'updatePage',
        'changeMainHeaderTitle' => 'changeMainHeaderTitle'
    ];

    /**
     * Change page (component) after clicking on menu
     * @param $page
     * @return void
     */
    public function updatePage($page)
    {
        $this->currentPage = $page;
    }

    /**
     * Change main header title
     * @param $title
     * @return void
     */
    public function changeMainHeaderTitle($title)
    {
        $this->mainHeaderTitle = $title;
    }
}
