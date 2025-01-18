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


    protected $listeners = [
        'changePage' => 'updatePage',
        'changePageTitle' => 'changePageTitle'
    ];

    public function updatePage($page)
    {
        $this->currentPage = $page;
    }
}
